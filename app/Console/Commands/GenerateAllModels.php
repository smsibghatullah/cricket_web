<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateAllModels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-all-models';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $config = config('database.connections.' . config('database.default'));
    $options = [
        'db_connection' => $config['driver'],
        'db_host' => $config['host'],
        'db_port' => $config['port'],
        'db_name' => $config['database'],
        'db_username' => $config['username'],
        'db_password' => $config['password'],
        'output_path' => app_path(),
        'namespace' => 'App'
    ];
    $generator = new EloquentGenerator(new ModelFromTableCommand(), $options);
    $generator->generate();
    }
}
