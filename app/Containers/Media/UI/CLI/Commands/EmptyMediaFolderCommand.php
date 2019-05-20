<?php

namespace App\Containers\Media\UI\CLI\Commands;

use App\Ship\Parents\Commands\ConsoleCommand;
use Exception;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Output\ConsoleOutput;

/**
 * Class EmptyMediaFolderCommand
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class EmptyMediaFolderCommand extends ConsoleCommand {

    protected $signature = 'treeo:media:empty';

    protected $description = 'Empty the media folder.';

    /**
     * EmptyMediaFolderCommand constructor.
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
            $files = Storage::files(config('media.folder'));
            $result = Storage::delete($files);
        } catch (Exception $e) {
            $this->console->writeln('Error! Media folder not emptied!');
            $this->console->writeln('Error: ' . $e);
            exit;
        }
        $this->console->writeln('Media folder emptied!');
    }
}