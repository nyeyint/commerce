<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2017-12-03 22:59:47',
                'updated_at' => '2017-12-03 22:59:47',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2017-12-04 00:33:36',
                'updated_at' => '2017-12-04 00:33:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Client',
                'display_name' => 'Client',
                'created_at' => '2017-12-07 17:51:40',
                'updated_at' => '2017-12-07 17:51:40',
            ),
        ));
        
        
    }
}