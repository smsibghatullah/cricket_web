<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Krlove\EloquentModelGenerator\Processor\EloquentGenerator;
use Krlove\EloquentModelGenerator\Command\ModelFromTableCommand;

class GenerateModels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:models {--connection=} {--path=} {--namespace=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate all Eloquent models from the specified database connection';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $options = [
            'db_connection' => $this->option('connection') ?: config('database.default'),
            'output_path' => $this->option('path') ?: app_path(),
            'namespace' => $this->option('namespace') ?: 'App\\Models\\',
        ];

        $generator = new EloquentGenerator(new ModelFromTableCommand(), $options);
        $generator->generate();
        
        $this->info('All Eloquent models have been generated successfully!');
    }
}
