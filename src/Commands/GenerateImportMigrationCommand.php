<?php

namespace YourVendor\ImportCommands\Commands;

class GenerateImportMigrationCommand
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function handle()
    {
        $timestamp = date('Y_m_d_His');
        $className = 'Import' . ucfirst($this->name) . 'Command';
        $fileName = "{$timestamp}_{$className}.php";
        $path = __DIR__ . '/../Migrations/' . $fileName;

        // Generate migration file content
        $content = "<?php\n\nuse YourVendor\ImportCommands\Migrations\Migration;\nuse YourVendor\ImportCommands\Database\Schema\Blueprint;\nuse YourVendor\ImportCommands\Database\Migrations\Schema;\n\nclass {$className} extends Migration\n{\n    public function up()\n    {\n        Schema::create('imported_commands', function (Blueprint \$table) {\n            \$table->id();\n            \$table->string('name');\n            \$table->timestamps();\n        });\n    }\n\n    public function down()\n    {\n        Schema::dropIfExists('imported_commands');\n    }\n}\n";

        // Write content to migration file
        file_put_contents($path, $content);

        echo "Migration created successfully: {$fileName}\n";
    }
}
