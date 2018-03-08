<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class UpdateAssets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assets:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update images assets from storage folder in case storage symlink doesn\'t work';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $asset_updater_script = base_path('asset_updater.sh');

        try {
            exec('chmod +x ' . $asset_updater_script);
            exec('sh ' . $asset_updater_script);
        } catch (\Exception $e) {
            return;
        }

        $this->info('Assets Updated!');
    }
}
