<?php

use Illuminate\Database\Seeder;

class PaymentChannelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_channel')->delete();
        
        \DB::table('payment_channel')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sprint Credit Card',
                'prefix' => 'sprint',
                'namespace' => 'App\\Components\\Payment\\PaymentObject\\Sprint\\SprintCreditCard',
                'channel_id' => 'BIOGREENONDO',
                'created_at' => '2018-01-03 15:46:23',
                'updated_at' => '2018-01-03 15:46:23',
                'status' => NULL,
                'icon' => NULL,
            ),
        ));
        
        
    }
}