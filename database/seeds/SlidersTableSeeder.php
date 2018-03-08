<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 7,
                'image_url' => 'sliders/December2017/qK8Q9lHsKHsAHPw2Sf68.jpg',
                'url' => NULL,
                'created_at' => '2017-12-15 01:38:37',
                'updated_at' => '2017-12-15 01:38:37',
            ),
            1 => 
            array (
                'id' => 8,
                'image_url' => 'sliders/December2017/hu2FhKKNjwdzSQVuWz4r.jpg',
                'url' => NULL,
                'created_at' => '2017-12-15 01:38:48',
                'updated_at' => '2017-12-15 01:38:48',
            ),
            2 => 
            array (
                'id' => 9,
                'image_url' => 'sliders/December2017/6OF5FvmTURIMEeprLlB0.jpg',
                'url' => NULL,
                'created_at' => '2017-12-15 01:38:56',
                'updated_at' => '2017-12-15 01:38:56',
            ),
            3 => 
            array (
                'id' => 10,
                'image_url' => 'sliders/December2017/Ji6EWJLHyG4B4aV0Zl7v.jpg',
                'url' => NULL,
                'created_at' => '2017-12-15 01:39:11',
                'updated_at' => '2017-12-15 01:39:11',
            ),
            4 => 
            array (
                'id' => 11,
                'image_url' => 'sliders/December2017/frMKWTe5yJ4vWWIOiv2Y.jpg',
                'url' => NULL,
                'created_at' => '2017-12-15 01:39:21',
                'updated_at' => '2017-12-15 01:39:21',
            ),
            5 => 
            array (
                'id' => 12,
                'image_url' => 'sliders/December2017/Dogaub5yL6mwERLH602p.jpg',
                'url' => NULL,
                'created_at' => '2017-12-15 01:39:28',
                'updated_at' => '2017-12-15 01:39:28',
            ),
        ));
        
        
    }
}