<?php

use Illuminate\Database\Seeder;

class CourierTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courier')->delete();
        
        \DB::table('courier')->insert(array (
            0 => 
            array (
                'id' => 1,
            'courier_name' => 'Jalur Nugraha Ekakurir (JNE)',
                'courier_shortcut' => 'jne',
                'is_active' => 1,
                'is_enabled' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:48:33',
                'logo' => 'courier/December2017/GPsLuKb420mQrJqUk71z.png',
            ),
            1 => 
            array (
                'id' => 2,
            'courier_name' => 'POS Indonesia (POS)',
                'courier_shortcut' => 'pos',
                'is_active' => 1,
                'is_enabled' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:53:07',
                'logo' => 'courier/December2017/rfnt5IGkNfsb3KF0gUjV.png',
            ),
            2 => 
            array (
                'id' => 3,
            'courier_name' => 'Citra Van Titipan Kilat (TIKI)',
                'courier_shortcut' => 'tiki',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:52:34',
                'logo' => 'courier/December2017/ORQGrPgHih9weZSXiAS4.jpg',
            ),
            3 => 
            array (
                'id' => 4,
            'courier_name' => 'Priority Cargo and Package (PCP)',
                'courier_shortcut' => 'pcp',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:52:07',
                'logo' => 'courier/December2017/se8APi7LiVxSXmq0dL5a.png',
            ),
            4 => 
            array (
                'id' => 5,
            'courier_name' => 'Eka Sari Lorena (ESL)',
                'courier_shortcut' => 'esl',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:51:37',
                'logo' => 'courier/December2017/flpVOYCaNkHPpJiefIwa.png',
            ),
            5 => 
            array (
                'id' => 6,
            'courier_name' => 'RPX Holding (RPX)',
                'courier_shortcut' => 'rpx',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:50:48',
                'logo' => 'courier/December2017/u2J0Xr1vKPvkWPstyKem.jpg',
            ),
            6 => 
            array (
                'id' => 7,
            'courier_name' => 'Pandu Logistics (PANDU)',
                'courier_shortcut' => 'pandu',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:50:19',
                'logo' => 'courier/December2017/W5dMaAvSXcsr6iSL1vzI.jpg',
            ),
            7 => 
            array (
                'id' => 8,
            'courier_name' => 'Wahana Prestasi Logistik (WAHANA)',
                'courier_shortcut' => 'wahana',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:49:47',
                'logo' => 'courier/December2017/EoYRG0QOi1t5OqmMzeyp.png',
            ),
            8 => 
            array (
                'id' => 10,
            'courier_name' => 'J&T Express (J&T)',
                'courier_shortcut' => 'jnt',
                'is_active' => 1,
                'is_enabled' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:46:42',
                'logo' => 'courier/December2017/dszqkMgsysAo0NlmnPZl.jpg',
            ),
            9 => 
            array (
                'id' => 11,
            'courier_name' => 'Pahala Kencana Express (PAHALA)',
                'courier_shortcut' => 'pahala',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:42:12',
                'logo' => 'courier/December2017/wSg6XLd0cIpnGzIlIra0.png',
            ),
            10 => 
            array (
                'id' => 12,
            'courier_name' => 'Cahaya Logistik (CAHAYA)',
                'courier_shortcut' => 'cahaya',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:49:11',
                'logo' => 'courier/December2017/m0jki4i8yhtmVwC4ctiH.png',
            ),
            11 => 
            array (
                'id' => 13,
            'courier_name' => 'SAP Express (SAP)',
                'courier_shortcut' => 'sap',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:48:08',
                'logo' => 'courier/December2017/ChTSa28k6R68fpKQU8oL.png',
            ),
            12 => 
            array (
                'id' => 14,
            'courier_name' => 'JET Express (JET)',
                'courier_shortcut' => 'jet',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:47:44',
                'logo' => 'courier/December2017/havsLBEOGCC1M9uLeOte.jpeg',
            ),
            13 => 
            array (
                'id' => 15,
            'courier_name' => 'Indah Logistic (INDAH)',
                'courier_shortcut' => 'indah',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:46:12',
                'logo' => 'courier/December2017/3siZ6ZRCxAzYMHtk0Faq.jpg',
            ),
            14 => 
            array (
                'id' => 18,
            'courier_name' => '21 Express (DSE)',
                'courier_shortcut' => 'dse',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:43:52',
                'logo' => 'courier/December2017/OQmhcEaVgRw2dBAlRgl9.png',
            ),
            15 => 
            array (
                'id' => 19,
            'courier_name' => 'Nusantara Card Semesta (NCS)',
                'courier_shortcut' => 'ncs',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:43:22',
                'logo' => 'courier/December2017/NWznL5QO7rfbsnAesy3n.png',
            ),
            16 => 
            array (
                'id' => 20,
            'courier_name' => 'Star Cargo (STAR)',
                'courier_shortcut' => 'star',
                'is_active' => 0,
                'is_enabled' => 0,
                'created_at' => NULL,
                'updated_at' => '2017-12-29 05:42:50',
                'logo' => 'courier/December2017/xm7BkWSrmzUrPlAFNpUq.jpg',
            ),
        ));
        
        
    }
}