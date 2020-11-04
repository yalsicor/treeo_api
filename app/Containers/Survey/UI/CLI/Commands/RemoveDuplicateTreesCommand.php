<?php

namespace App\Containers\Survey\UI\CLI\Commands;

use App\Containers\Media\Models\Media;
use App\Containers\Survey\Models\Survey;
use App\Ship\Parents\Commands\ConsoleCommand;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Output\ConsoleOutput;

/**
 * Class RemoveDuplicateTreesCommand
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class RemoveDuplicateTreesCommand extends ConsoleCommand
{

    protected $signature = 'treeo:trees:removeDuplicates';

    protected $description = 'Remove tree duplicates.';

    /**
     * RemoveDuplicateTreesCommand constructor.
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
            //get surveys with treecount = null
            $surveys = Survey::whereNull('treecount')->get();

            $deleteCount = 0;

            foreach ($surveys as $survey) {

                $originals = $survey->trees;
                $delete = new \Illuminate\Database\Eloquent\Collection;

                $this->console->writeln('survey: ' . $survey->identifier);

                foreach ($originals as $tree) {
                    $this->console->write('.');

                    //check, if its marked for deletion
                    if ($delete->where('id', $tree->id)->first()) continue;

                    //find duplicates
                    $duplicates = $originals
                        ->where('timestamp', $tree->timestamp)
                        ->where('dbh_cm', $tree->dbh_cm)
                        ->where('timestamp', '<>', null)
                        ->where('id', '<>', $tree->id);

                    $duplicates->each(function($item) use ($delete){
                        $delete->push($item);
                    });

                }
                $this->console->writeln(' ');

                if ($delete->count() == 0) $this->console->writeln('No duplicates found.');
                else {
                    $this->console->writeln($delete->count().' trees as duplicates for deletion:');
                    dump($delete->pluck('identifier'));
                    $deleteCount += $delete->count();
                    //delete duplicates
                    $delete->each(function ($item) {
                         $item->delete();
                    });
                }

            }

            $this->console->writeln('');

        } catch (Exception $e) {
            $this->console->writeln('Error! Something went wrong!');
            $this->console->writeln('Error: ' . $e);
            exit;
        }
        $this->console->writeln($deleteCount.' Duplicates cleaned!');
    }
}
