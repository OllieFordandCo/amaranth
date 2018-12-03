<?php

namespace OllieFordandCo\Amaranth\Commands;

use Jackiedo\DotenvEditor\Facades\DotenvEditor;
use Illuminate\Console\Command;

class InstallCommand extends Command {

    protected $signature = 'amaranth:install';

    protected $description = 'Removes initial scaffolding and installs all the application files to the main laravel directory.';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {

        \Artisan::call("make:auth", ['--force' => true]);
        echo "Auth published\n";
        \Artisan::call("vendor:publish", ['--provider' => "OllieFordandCo\\Amaranth\\AmaranthServiceProvider", '--force' => true]);
        echo "Amaranth published\n";
        $this->removeLines();
        echo "Routes updated\n";
        $this->emptyDir(base_path('database/migrations'));
        echo "Migrations removed\n";

    }

    public function emptyDir($path) {
        //It it's a file.
        if (is_file($path)) {
            //Attempt to delete it.
            return unlink($path);
        }
        //If it's a directory.
        elseif (is_dir($path)) {
            //Get a list of the files in this directory.
            $scan = glob(rtrim($path,'/').'/*');
            //Loop through the list of files.
            foreach($scan as $index=>$path) {
                //Call our recursive function.
                $this->emptyDir($path);
            }
        }
    }

    public function removeLines() {

        $newContent = file_get_contents(__DIR__.'/stubs/routes/web.stub');

        file_put_contents(
            base_path('routes/web.php'),
            $newContent
        );


    }

}