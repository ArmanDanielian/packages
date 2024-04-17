<?php

namespace YourVendor\ImportCommands\Commands;

class RunImportedCommands
{
    public function handle()
    {
        $importedCommands = ['ImportFooCommand', 'ImportBarCommand']; // Simulated imported commands

        foreach ($importedCommands as $command) {
            $this->executeCommand($command);
        }

        echo "Imported commands executed successfully.\n";
    }

    private function executeCommand($command)
    {
        $className = "YourVendor\\ImportCommands\\Commands\\{$command}";
        $instance = new $className();
        $instance->handle();
    }
}
