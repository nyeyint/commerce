<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 39,
                'status' => 'shipped',
                'total' => '3000000',
                'quantity' => '20',
                'order_details_id' => 12,
                'created_at' => '2017-12-28 00:00:00',
                'updated_at' => NULL,
                'order_id' => 'BIO0058XV',
            ),
        ));
        
        
    }
}