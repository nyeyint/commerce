<?php

use Illuminate\Database\Seeder;

class NewsletterEmailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('newsletter_email')->delete();
        
        
        
    }
}