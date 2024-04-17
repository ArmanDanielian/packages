<?php

namespace YourVendor\ImportCommands;

use YourVendor\ImportCommands\Commands\GenerateImportMigrationCommand;
use YourVendor\ImportCommands\Commands\RunImportedCommands;

class ImportCommandsServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateImportMigrationCommand::class,
                RunImportedCommands::class,
            ]);
        }
    }
}
