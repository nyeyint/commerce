<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:install {domain}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install new cms';

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
        $domain = $this->argument('domain');
        $this->info('Installing on ' . $domain);
        $this->info('Setting Up APP_URL...');
        change_env('APP_NAME', 'BJMSOnline');
        change_env('APP_URL', $domain);

        $this->info('Setting Up database name...');
        change_env('DB_DATABASE', 'bjms');
        $this->info('Setting Up database user....');
        change_env('DB_USERNAME', 'bjms_user');
        $this->info('Setting Up database password....');
        change_env('DB_PASSWORD', 'Password123##');

        $this->info('Setting Up OAuth Configuration......');
        change_env('FACEBOOK_CLIENT_ID', '149090949192399');
        change_env('FACEBOOK_CLIENT_SECRET', '7580af87960a5bf512036d6020e0d0c6');
        change_env('FACEBOOK_REDIRECT_URL', $domain . '/oauth/authorize/callback/facebook');
        change_env('TWITTER_CLIENT_ID', 'JpZRBKjS1qv7bx9c5bjhcq1lm');
        change_env('TWITTER_CLIENT_SECRET', 'khUSWD1GrnS4pMoUCjq7UXt5KvQKVbuLu8MWOKH2bnRwEnwqrA');
        change_env('TWITTER_REDIRECT_URL', $domain . '/oauth/authorize/callback/twiter');

        $this->info('Setting Up SMTP Setting....');
        change_env('MAIL_HOST', 'smtp.mailgun.org');
        change_env('MAIL_USERNAME', 'postmaster@mg.bjmsonline.com');
        change_env('MAIL_PASSWORD', '238cdc6348a7c8cc10df9c5adfe70826');

        $this->info('ENV Has been setup successfully!');
    }
}
