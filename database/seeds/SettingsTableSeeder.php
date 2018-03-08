<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'BioStore',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'BioStore, Store All of Us',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => 'settings/December2017/26TbqpKQWSIdNWR9VGks.png',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => '',
                'details' => '',
                'type' => 'text',
                'order' => 19,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'BioStore',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Welcome to Voyager. The Missing Admin for Laravel',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => '',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'social-media.facebook',
                'display_name' => 'Facebook',
                'value' => '',
                'details' => NULL,
                'type' => 'text',
                'order' => 6,
                'group' => 'Social Media',
            ),
            11 => 
            array (
                'id' => 13,
                'key' => 'social-media.instagram',
                'display_name' => 'Instagram',
                'value' => '',
                'details' => NULL,
                'type' => 'text',
                'order' => 9,
                'group' => 'Social Media',
            ),
            12 => 
            array (
                'id' => 14,
                'key' => 'social-media.youtube',
                'display_name' => 'Youtube',
                'value' => '',
                'details' => NULL,
                'type' => 'text',
                'order' => 10,
                'group' => 'Social Media',
            ),
            13 => 
            array (
                'id' => 15,
                'key' => 'social-media.twitter',
                'display_name' => 'Twitter',
                'value' => '',
                'details' => NULL,
                'type' => 'text',
                'order' => 8,
                'group' => 'Social Media',
            ),
            14 => 
            array (
                'id' => 16,
                'key' => 'ecommerce.auto_cancel',
            'display_name' => 'Auto Cancel Order (in hours)',
                'value' => '24',
                'details' => NULL,
                'type' => 'text',
                'order' => 11,
                'group' => 'Ecommerce',
            ),
            15 => 
            array (
                'id' => 17,
                'key' => 'ecommerce.email_address',
                'display_name' => 'Email Address',
                'value' => 'noreply@biogreenscience.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 13,
                'group' => 'Ecommerce',
            ),
            16 => 
            array (
                'id' => 18,
                'key' => 'ecommerce.phone',
                'display_name' => 'Phone',
                'value' => '+62 21 - 224 54 580',
                'details' => NULL,
                'type' => 'text',
                'order' => 14,
                'group' => 'Ecommerce',
            ),
            17 => 
            array (
                'id' => 19,
                'key' => 'ecommerce.product_limit',
                'display_name' => 'Product List Limit',
                'value' => '8',
                'details' => NULL,
                'type' => 'text',
                'order' => 15,
                'group' => 'Ecommerce',
            ),
            18 => 
            array (
                'id' => 21,
                'key' => 'admin.admin_url',
                'display_name' => 'Admin URL',
                'value' => 'admin',
                'details' => NULL,
                'type' => 'text',
                'order' => 16,
                'group' => 'Admin',
            ),
            19 => 
            array (
                'id' => 22,
                'key' => 'ecommerce.email_name',
                'display_name' => 'Email Name',
                'value' => 'BioStore',
                'details' => NULL,
                'type' => 'text',
                'order' => 12,
                'group' => 'Ecommerce',
            ),
            20 => 
            array (
                'id' => 23,
                'key' => 'site.favicon',
                'display_name' => 'Site Favicon',
                'value' => 'settings/December2017/Z9zoiSOQxTVrVr6lzTOX.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 4,
                'group' => 'Site',
            ),
            21 => 
            array (
                'id' => 24,
                'key' => 'site.cache',
            'display_name' => 'Cache Time Period (minute)',
                'value' => '1440',
                'details' => NULL,
                'type' => 'text',
                'order' => 21,
                'group' => 'Site',
            ),
            22 => 
            array (
                'id' => 25,
                'key' => 'ecommerce.max_address',
                'display_name' => 'Maximum Address Add By Customer',
                'value' => '4',
                'details' => NULL,
                'type' => 'text',
                'order' => 20,
                'group' => 'Ecommerce',
            ),
            23 => 
            array (
                'id' => 26,
                'key' => 'site.icon',
                'display_name' => 'Site Icon',
                'value' => 'settings/January2018/aoyqDwvDaPqm7LULdNft.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 18,
                'group' => 'Site',
            ),
            24 => 
            array (
                'id' => 28,
                'key' => 'messages.no_cart',
                'display_name' => 'No Item In Cart',
                'value' => 'Oops!, Anda belum memasukan item ke Cart, SIlahkan berbelanja kembali dan dapatkan penawaran spesial dari kami',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 23,
                'group' => 'Messages',
            ),
            25 => 
            array (
                'id' => 29,
                'key' => 'messages.no_cart_item',
                'display_name' => 'No Item In Cart Title',
                'value' => 'Keranjang Kosong',
                'details' => NULL,
                'type' => 'text',
                'order' => 22,
                'group' => 'Messages',
            ),
        ));
        
        
    }
}