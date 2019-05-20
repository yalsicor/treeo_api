<?php

namespace App\Containers\Import\UI\CLI\Commands;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Nursery\Models\Nursery;
use App\Containers\Plot\Models\Plot;
use App\Ship\Parents\Commands\ConsoleCommand;
use Illuminate\Support\Facades\Storage;
use Samwilson\PhpFlickr\PhpFlickr;

/**
 * Class ExtractFlickrNurseryImagesCommand
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class ExtractFlickrNurseryImagesCommand extends ConsoleCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'treeo:flickr:nursery';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Extract nursery data from flickr and save it locally.';

    private $flickrApi;

    private $ErrorFile = "flickr/nursery_invalid.txt";

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->flickrApi = new PhpFlickr(env('FLICKR_KEY'));
    }

    /**
     * Execute the console command.
     *
     * @return void
     * @throws \Exception
     */
    public function handle()
    {
        //albums
        $this->info('Extracting nursery albums...');

        //get all plots with flickr_album
        $albums = Nursery::whereNotNull('flickr_album')->get();

        $this->info("{$albums->count()} nurseries with flickr album found.");

        $this->output->progressStart(count($albums));

        //foreach get flickr data
        foreach ($albums as $album) {
            $this->output->progressAdvance();

            $albumId = $album->flickr_album;

            try {
                $photos = $this->getFlickrPhotoIdsFromAlbum($albumId);

                foreach ($photos as $photoId) {
                    //check, if file is already downloaded
                    if ($this->checkFile($photoId, $albumId)) continue;

                    $this->importFlickrPhotoById($photoId, $albumId);
                }

            } catch (\Exception $e) {
                continue;

            }

        }

        $this->output->progressFinish();

        //photos
        $photos = Nursery::whereNotNull('flickr_photo')->get();

        $this->info("{$photos->count()} nurseries with flickr photo found.");

        $this->output->progressStart(count($photos));

        //foreach get flickr data
        foreach ($photos as $photo) {
            $this->output->progressAdvance();

            $photoId = $photo->flickr_photo;

            //check, if file is already downloaded
            if ($this->checkFile($photoId)) continue;

            try {
                $this->importFlickrPhotoById($photoId);
            } catch (\Exception $e) {
                continue;
            }
        }

        $this->output->progressFinish();

    }

    /**
     * @param $url
     * @param $id
     * @param null $albumId
     */
    protected function importMediaFromUrl($url, $id, $albumId = null)
    {
        $contents = file_get_contents($url);

        $this->putFile($this->buildImagePath($id, $albumId), $contents);
    }

    /**
     * @param $photoId
     * @param null $albumId
     */
    protected function importFlickrPhotoById($photoId, $albumId = null)
    {
        //dont overdo the flickr api
        sleep(1);

        try {
            $info = $this->flickrApi->photos()->getInfo($photoId);
        } catch (\Exception $exception) {
            return;
        }

        $this->importMediaFromUrl($this->buildUrl($info), $photoId, $albumId);

        $this->writeMetaData($info, $albumId);
    }

    /**
     * @param $id
     * @return array
     * @throws \Exception
     */
    protected function getFlickrPhotoIdsFromAlbum($id)
    {
        try {
            $info = $this->flickrApi->photosets()->getPhotos($id);

            $photos = $info['photo'];

        } catch (\Exception $e) {
            $this->writeToErrorList($id);
            throw $e;
        }
        return array_column($photos, 'id');
    }

    /**
     * @param $id
     */
    protected function writeToErrorList($id)
    {
        Storage::disk('local')->append($this->ErrorFile, $id);
    }

    /**
     * @param $photoId
     * @param null $albumId
     * @return string
     */
    protected function buildImagePath($photoId, $albumId = null)
    {
        $folder = $albumId ?? $photoId;

        return "/flickr/{$folder}/{$photoId}.jpg";
    }

    /**
     * @param $photoId
     * @param null $albumId
     * @return string
     */
    protected function buildMetaPath($photoId, $albumId = null)
    {
        $folder = $albumId ?? $photoId;

        return "/flickr/{$folder}/{$photoId}.txt";
    }

    /**
     * @param $photoId
     * @param null $albumId
     * @return bool
     */
    protected function checkFile($photoId, $albumId = null)
    {
        return Storage::disk('local')->exists($this->buildImagePath($photoId, $albumId));
    }

    /**
     * @param $path
     * @param $contents
     */
    protected function putFile($path, $contents)
    {
        Storage::disk('local')->put($path, $contents);
    }

    /**
     * @param array $info
     * @return string
     */
    protected function buildUrl(array $info)
    {
        $photoId    = $info['id'];
        $farm       = $info['farm'];
        $server     = $info['server'];
        $secret     = $info['originalsecret'];
        $format     = $info['originalformat'];

        return "https://farm{$farm}.staticflickr.com/{$server}/{$photoId}_{$secret}_o.{$format}";
    }

    /**
     * @param $info
     * @param null $albumId
     */
    protected function writeMetaData($info, $albumId = null)
    {
        $contents = array(
            'title'         => $info['title'],
            'description'   => $info['description'],
        );

        $this->putFile($this->buildMetaPath($info['id'], $albumId), json_encode($contents));
    }

}
