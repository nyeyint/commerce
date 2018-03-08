<?php

use Illuminate\Database\Seeder;

class ProductBrandTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_brand')->delete();
        
        \DB::table('product_brand')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Apple SC',
                'slug' => 'apple-sc',
                'icon' => 'product-brand/December2017/po3kJTngWErnFxPaiNlK.png',
                'created_at' => '2017-12-10 04:55:22',
                'updated_at' => '2017-12-27 02:12:09',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Bio Stemcell Gold',
                'slug' => 'bio-stemcell-gold',
                'icon' => 'product-brand/December2017/yjI78tKJx2DLRMnSPajI.png',
                'created_at' => '2017-12-10 04:55:46',
                'updated_at' => '2017-12-27 02:11:57',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bio SC Serum',
                'slug' => 'bio-sc-serum',
                'icon' => 'product-brand/December2017/JEPyIHoW9Tcpsy6J6ARb.png',
                'created_at' => '2017-12-10 04:56:14',
                'updated_at' => '2017-12-27 02:11:34',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Bio SC Mild',
                'slug' => 'bio-sc-mild',
                'icon' => 'product-brand/December2017/gKEXcxredWU7rpx0Vyp6.png',
                'created_at' => '2017-12-10 04:56:32',
                'updated_at' => '2017-12-27 02:11:23',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bio SC Hair Serum',
                'slug' => 'bio-sc-hair-serum',
                'icon' => 'product-brand/December2017/aDr6VvqSkfUb9T1fzpJh.png',
                'created_at' => '2017-12-10 04:56:55',
                'updated_at' => '2017-12-27 02:11:07',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Bio SC Fit',
                'slug' => 'bio-sc-fit',
                'icon' => 'product-brand/December2017/WJbEnu5F30Gu9EZ4mAJS.png',
                'created_at' => '2017-12-10 04:57:10',
                'updated_at' => '2017-12-27 02:10:55',
            ),
        ));
        
        
    }
}