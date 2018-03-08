<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('addresses')->delete();
        
        \DB::table('addresses')->insert(array (
            0 => 
            array (
                'id' => 7,
                'user_id' => '40',
                'title' => 'Ini alamat ya?',
                'post_code' => '12345',
                'province_id' => '6',
                'province_label' => 'DKI Jakarta',
                'city_id' => '151',
            'city_label' => 'Jakarta Barat (Kota)',
                'subdistrict_id' => '2087',
                'subdistrict_label' => 'Cengkareng',
                'street' => 'Jalan kelapa gading tapi kelapanya di ambil orang',
                'default' => 1,
                'created_at' => '2018-01-03 04:42:31',
                'updated_at' => '2018-01-03 04:42:31',
            ),
            1 => 
            array (
                'id' => 8,
                'user_id' => '41',
                'title' => 'TKP Pembunuhan',
                'post_code' => '99999',
                'province_id' => '6',
                'province_label' => 'DKI Jakarta',
                'city_id' => '151',
            'city_label' => 'Jakarta Barat (Kota)',
                'subdistrict_id' => '2087',
                'subdistrict_label' => 'Cengkareng',
                'street' => 'Jl, pembunuhan, tapi yang di bunuh masih hidup',
                'default' => 1,
                'created_at' => '2018-01-03 13:20:56',
                'updated_at' => '2018-01-03 13:20:56',
            ),
            2 => 
            array (
                'id' => 9,
                'user_id' => '1',
                'title' => 'Alamat 1',
                'post_code' => '11730',
                'province_id' => '6',
                'province_label' => 'DKI Jakarta',
                'city_id' => '151',
            'city_label' => 'Jakarta Barat (Kota)',
                'subdistrict_id' => '2090',
                'subdistrict_label' => 'Kebon Jeruk',
                'street' => 'Jl',
                'default' => 1,
                'created_at' => '2018-01-03 15:28:25',
                'updated_at' => '2018-01-03 15:28:25',
            ),
        ));
        
        
    }
}