<?php

namespace OllieFordandCo\Amaranth\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command {

    protected $signature = 'amaranth:install';

    protected $description = 'Removes initial scaffolding and installs all the application files to the main laravel directory.';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {

    }

}