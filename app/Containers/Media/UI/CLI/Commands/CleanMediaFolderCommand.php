<?php

namespace App\Containers\Media\UI\CLI\Commands;

use App\Containers\Media\Models\Media;
use App\Ship\Parents\Commands\ConsoleCommand;
use Exception;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Output\ConsoleOutput;

/**
 * Class CleanMediaFolderCommand
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CleanMediaFolderCommand extends ConsoleCommand {

    protected $signature = 'treeo:media:clean';

    protected $description = 'Clean the media folder.';

    /**
     * ClearMediaFolderCommand constructor.
     * @param ConsoleOutput $console
     */
    public function __construct(ConsoleOutput $console)
    {
        parent::__construct();

        $this->console = $console;
    }

    /**
     *
     */
    public function handle()
    {
        try {
            //get all files
            $files = Storage::files(config('media.folder'));

            //get all files from db
            $dbfiles = Media::all()->pluck('path')->toArray();

            // remove db files from files
            $files = array_diff($files, $dbfiles);

            //delete rest
            $result = Storage::delete($files);
        } catch (Exception $e) {
            $this->console->writeln('Error! Media folder not cleaned!');
            $this->console->writeln('Error: ' . $e);
            exit;
        }
        $this->console->writeln('Media folder cleaned!');
    }
}