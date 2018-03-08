<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Healthy',
                'slug' => 'healthy',
                'banner' => 'product-categories/December2017/tZdIA1IMHtHW8tVSGpO1.jpg',
                'created_at' => '2017-12-09 12:58:00',
                'updated_at' => '2017-12-15 01:42:16',
                'product_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Beauty',
                'slug' => 'beauty',
                'banner' => 'product-categories/December2017/JXAN2tKiE9K9rY3yYUYO.jpg',
                'created_at' => '2017-12-09 13:04:00',
                'updated_at' => '2017-12-15 01:42:07',
                'product_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Vitality',
                'slug' => 'vitality',
                'banner' => 'product-categories/December2017/DZo7Q1Nwh0xlSU6ECoOm.jpg',
                'created_at' => '2017-12-09 23:11:00',
                'updated_at' => '2017-12-15 01:41:56',
                'product_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Merchandise',
                'slug' => 'merchandise',
                'banner' => 'product-categories/December2017/VfPIEkyMGS4CDosi8gxi.jpg',
                'created_at' => '2017-12-09 23:12:00',
                'updated_at' => '2017-12-15 01:41:41',
                'product_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Sex',
                'slug' => 'sex',
                'banner' => NULL,
                'created_at' => '2017-12-10 13:13:52',
                'updated_at' => '2017-12-10 13:13:52',
                'product_id' => NULL,
            ),
        ));
        
        
    }
}