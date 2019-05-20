<?php

namespace App\Containers\Tree\UI\CLI\Commands;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Plot\Models\Plot;
use App\Containers\Survey\Models\Survey;
use App\Containers\Tree\Models\Tree;
use App\Ship\Parents\Commands\ConsoleCommand;
use App\Ship\Transporters\DataTransporter;

/**
 * Class CalculateTreeHeightCommand
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class CalculateTreeHeightCommand extends ConsoleCommand
{

    protected $signature = 'treeo:calculate:tree_height';

    protected $description = 'Calculates tree height of trees without heights';

    /**
     * @void
     */
    public function handle()
    {
        //search for new surveys
        $trees = Tree::whereNull('height_m')->get();

        $this->info("{$trees->count()} trees without height found.");

        $heightCount = 0;

        $this->output->progressStart($trees->count());

        foreach ($trees as $tree) {
            if (!$tree->height_m) {
                $tree->height_m = $tree->estimateHeight($tree->dbh_cm);
                $tree->height_calculated = true;
                $tree->save();
                $heightCount++;

                $this->output->progressAdvance();
            }
        }

        $this->output->progressFinish();

        $this->info("{$heightCount} trees updated with heights.");
    }
}
