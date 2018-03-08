<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 6,
                'image_id' => NULL,
                'category_id' => '1',
                'brand_id' => '1',
                'short_description' => 'Powder drink that regenerates human’s body cells and activates dormant cells.',
                'long_description' => '<div>
<p>Applesc&reg; adalah produk unggulan dari Biogreen Science. Terdapat tiga kegunaan utama dan efek, antara lain memperbaiki sel yang rusak, mengaktifkan sel yang tidur, dan meregenerasi sel. Memiliki 6 bahan aktif, antara lain PhytoCellTec&trade; Malus Domestica, PhytoCellTec&trade; Solar Vitis, L-Glutathion, Hidrolisis Kolagen (Ikan), Asam Askorbat, dan Stevia.</p>
<div>
<div class="row">
<div class="col-md-4"><img src="https://bio-template.dev/assets/images/slider/product_applesc_h.jpg" /></div>
<div class="col-md-4"><img src="https://bio-template.dev/assets/images/slider/product_applesc_h.jpg" /></div>
<div class="col-md-4"><img src="https://bio-template.dev/assets/images/slider/product_applesc_h.jpg" /></div>
</div>
</div>
</div>',
                'price' => 1000000,
                'quantity' => '900',
                'status' => 1,
            'slug' => 'applesc(r)',
                'created_at' => '2017-12-15 03:11:55',
                'updated_at' => '2017-12-15 03:11:55',
                'name' => 'Applesc®',
                'images' => '["products\\/December2017\\/HsfFEbdl2IvUcLAZGSgF.jpg"]',
                'is_discount' => 1,
                'discount_percent' => '20%',
                'code' => 'ASC-859',
            ),
            1 => 
            array (
                'id' => 7,
                'image_id' => NULL,
                'category_id' => '5',
                'brand_id' => '2',
                'short_description' => 'blablablablabla',
                'long_description' => '<p>in istemcel</p>
<p><img src="https://media3.giphy.com/media/Inufb9NaNyaXe/200w.gif?cid=540216295a32db3f4a6d464241731e89" /></p>',
                'price' => 1437000,
                'quantity' => '150',
                'status' => 1,
            'slug' => 'bio-stemcell-gold(r)',
                'created_at' => '2017-12-15 03:13:37',
                'updated_at' => '2017-12-15 03:13:37',
                'name' => 'Bio Stemcell Gold®',
                'images' => '["products\\/December2017\\/Njdbq6Kt8E8BTZ4VCRQD.jpg"]',
                'is_discount' => 0,
                'discount_percent' => '0%',
                'code' => 'BSG-029',
            ),
            2 => 
            array (
                'id' => 8,
                'image_id' => NULL,
                'category_id' => '2',
                'brand_id' => '3',
                'short_description' => 'ini bio sc serum',
                'long_description' => '<p>Hahaha gua bisa nulis euy</p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
                'price' => 1500000,
                'quantity' => '50',
                'status' => 1,
            'slug' => 'bio-sc-serum(r)',
                'created_at' => '2017-12-15 03:14:46',
                'updated_at' => '2017-12-15 03:14:46',
                'name' => 'Bio SC Serum®',
                'images' => '["products\\/December2017\\/8tU9wUOHgnOb2JUk7xDn.jpg"]',
                'is_discount' => 0,
                'discount_percent' => '0%',
                'code' => 'BSS-847',
            ),
            3 => 
            array (
                'id' => 9,
                'image_id' => NULL,
                'category_id' => '2',
                'brand_id' => '4',
                'short_description' => 'Ini produk punya 2 kategori loh',
                'long_description' => '<p style="text-align: center;">HAHAHAHAHA IN TEXTNYA DITENGAH GAN</p>',
                'price' => 760000,
                'quantity' => '90',
                'status' => 1,
            'slug' => 'bio-sc-mild(r)',
                'created_at' => '2017-12-14 13:16:00',
                'updated_at' => '2017-12-15 03:45:00',
                'name' => 'Bio SC Mild®',
                'images' => '["products\\/December2017\\/tb1GBBw3QBowxKdhedz6.jpg","products\\/December2017\\/fHOE3rRAZqUxVEEPHcjX.jpg","products\\/December2017\\/XGGsAiXXFH3oTk3pW46e.jpg","products\\/December2017\\/hMwxpixCycAp2Eq4fMHA.jpg","products\\/December2017\\/sIg6DrWHfBZ2eAImPa5u.jpg","products\\/December2017\\/Fm6YPK4qhOvKCfibyygm.jpg","products\\/December2017\\/7Ngrj5IO3qheLJ30KMNN.jpg"]',
                'is_discount' => 1,
                'discount_percent' => '5%',
                'code' => 'BSM-645',
            ),
            4 => 
            array (
                'id' => 10,
                'image_id' => NULL,
                'category_id' => '5',
                'brand_id' => '5',
                'short_description' => 'Ini produknya punya banyak kategori',
                'long_description' => '<p style="text-align: right;">di kanan di kanan di kanan di kanan dui kanan ,. bgi duit om</p>',
                'price' => 980000,
                'quantity' => '110',
                'status' => 1,
            'slug' => 'bio-sc-hair-serum(r)',
                'created_at' => '2017-12-14 13:17:00',
                'updated_at' => '2017-12-15 03:44:29',
                'name' => 'Bio SC Hair Serum®',
                'images' => '["products\\/December2017\\/TdMUjiteRMoyA8V8RQ4W.jpg","products\\/December2017\\/3VlIiOYgqXqon64HzzKv.jpg","products\\/December2017\\/RJqvAIQVxGpuQkdjPnfW.jpg"]',
                'is_discount' => 1,
                'discount_percent' => '80%',
                'code' => 'BHS-390',
            ),
        ));
        
        
    }
}