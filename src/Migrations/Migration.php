<?php

namespace YourVendor\ImportCommands\Migrations;

class Migration
{
    public static function create($tableName, $callback)
    {
        echo "Creating table {$tableName}...\n";
        // Simulate table creation
        echo "Table {$tableName} created successfully.\n";
    }

    public static function dropIfExists($tableName)
    {
        echo "Dropping table {$tableName}...\n";
        // Simulate table dropping
        echo "Table {$tableName} dropped successfully.\n";
    }
}
