<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreatePaymentChannel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payment-channel:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Payment Channel Object';

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
        $name = $this->ask('Enter NameSpace ');
        $dir  = str_replace("\\", "/", $name);
        $this->info($dir);
    }
}
