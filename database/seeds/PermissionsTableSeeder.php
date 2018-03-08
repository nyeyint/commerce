<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2017-12-04 00:33:36',
                'updated_at' => '2017-12-04 00:33:36',
                'permission_group_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2017-12-04 00:33:36',
                'updated_at' => '2017-12-04 00:33:36',
                'permission_group_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2017-12-04 00:33:36',
                'updated_at' => '2017-12-04 00:33:36',
                'permission_group_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2017-12-04 00:33:36',
                'updated_at' => '2017-12-04 00:33:36',
                'permission_group_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2017-12-04 00:33:36',
                'updated_at' => '2017-12-04 00:33:36',
                'permission_group_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2017-12-04 00:33:36',
                'updated_at' => '2017-12-04 00:33:36',
                'permission_group_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2017-12-04 00:33:36',
                'updated_at' => '2017-12-04 00:33:36',
                'permission_group_id' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2017-12-04 00:33:36',
                'updated_at' => '2017-12-04 00:33:36',
                'permission_group_id' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2017-12-04 00:33:36',
                'updated_at' => '2017-12-04 00:33:36',
                'permission_group_id' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2017-12-04 00:33:36',
                'updated_at' => '2017-12-04 00:33:36',
                'permission_group_id' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2017-12-04 00:33:36',
                'updated_at' => '2017-12-04 00:33:36',
                'permission_group_id' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2017-12-04 00:33:37',
                'updated_at' => '2017-12-04 00:33:37',
                'permission_group_id' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2017-12-04 00:33:38',
                'updated_at' => '2017-12-04 00:33:38',
                'permission_group_id' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2017-12-04 00:33:38',
                'updated_at' => '2017-12-04 00:33:38',
                'permission_group_id' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2017-12-04 00:33:38',
                'updated_at' => '2017-12-04 00:33:38',
                'permission_group_id' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2017-12-04 00:33:38',
                'updated_at' => '2017-12-04 00:33:38',
                'permission_group_id' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2017-12-04 00:33:38',
                'updated_at' => '2017-12-04 00:33:38',
                'permission_group_id' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2017-12-04 00:33:38',
                'updated_at' => '2017-12-04 00:33:38',
                'permission_group_id' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2017-12-04 00:33:38',
                'updated_at' => '2017-12-04 00:33:38',
                'permission_group_id' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2017-12-04 00:33:38',
                'updated_at' => '2017-12-04 00:33:38',
                'permission_group_id' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2017-12-04 00:33:38',
                'updated_at' => '2017-12-04 00:33:38',
                'permission_group_id' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2017-12-04 00:33:38',
                'updated_at' => '2017-12-04 00:33:38',
                'permission_group_id' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2017-12-04 00:33:38',
                'updated_at' => '2017-12-04 00:33:38',
                'permission_group_id' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2017-12-04 00:33:38',
                'updated_at' => '2017-12-04 00:33:38',
                'permission_group_id' => NULL,
            ),
            39 => 
            array (
                'id' => 45,
                'key' => 'browse_sliders',
                'table_name' => 'sliders',
                'created_at' => '2017-12-07 17:48:52',
                'updated_at' => '2017-12-07 17:48:52',
                'permission_group_id' => NULL,
            ),
            40 => 
            array (
                'id' => 46,
                'key' => 'read_sliders',
                'table_name' => 'sliders',
                'created_at' => '2017-12-07 17:48:52',
                'updated_at' => '2017-12-07 17:48:52',
                'permission_group_id' => NULL,
            ),
            41 => 
            array (
                'id' => 47,
                'key' => 'edit_sliders',
                'table_name' => 'sliders',
                'created_at' => '2017-12-07 17:48:52',
                'updated_at' => '2017-12-07 17:48:52',
                'permission_group_id' => NULL,
            ),
            42 => 
            array (
                'id' => 48,
                'key' => 'add_sliders',
                'table_name' => 'sliders',
                'created_at' => '2017-12-07 17:48:52',
                'updated_at' => '2017-12-07 17:48:52',
                'permission_group_id' => NULL,
            ),
            43 => 
            array (
                'id' => 49,
                'key' => 'delete_sliders',
                'table_name' => 'sliders',
                'created_at' => '2017-12-07 17:48:52',
                'updated_at' => '2017-12-07 17:48:52',
                'permission_group_id' => NULL,
            ),
            44 => 
            array (
                'id' => 60,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2017-12-10 02:06:54',
                'updated_at' => '2017-12-10 02:06:54',
                'permission_group_id' => NULL,
            ),
            45 => 
            array (
                'id' => 61,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2017-12-10 02:06:54',
                'updated_at' => '2017-12-10 02:06:54',
                'permission_group_id' => NULL,
            ),
            46 => 
            array (
                'id' => 62,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2017-12-10 02:06:54',
                'updated_at' => '2017-12-10 02:06:54',
                'permission_group_id' => NULL,
            ),
            47 => 
            array (
                'id' => 63,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2017-12-10 02:06:54',
                'updated_at' => '2017-12-10 02:06:54',
                'permission_group_id' => NULL,
            ),
            48 => 
            array (
                'id' => 64,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2017-12-10 02:06:54',
                'updated_at' => '2017-12-10 02:06:54',
                'permission_group_id' => NULL,
            ),
            49 => 
            array (
                'id' => 65,
                'key' => 'browse_product_categories',
                'table_name' => 'product_categories',
                'created_at' => '2017-12-10 02:51:30',
                'updated_at' => '2017-12-10 02:51:30',
                'permission_group_id' => NULL,
            ),
            50 => 
            array (
                'id' => 66,
                'key' => 'read_product_categories',
                'table_name' => 'product_categories',
                'created_at' => '2017-12-10 02:51:30',
                'updated_at' => '2017-12-10 02:51:30',
                'permission_group_id' => NULL,
            ),
            51 => 
            array (
                'id' => 67,
                'key' => 'edit_product_categories',
                'table_name' => 'product_categories',
                'created_at' => '2017-12-10 02:51:30',
                'updated_at' => '2017-12-10 02:51:30',
                'permission_group_id' => NULL,
            ),
            52 => 
            array (
                'id' => 68,
                'key' => 'add_product_categories',
                'table_name' => 'product_categories',
                'created_at' => '2017-12-10 02:51:30',
                'updated_at' => '2017-12-10 02:51:30',
                'permission_group_id' => NULL,
            ),
            53 => 
            array (
                'id' => 69,
                'key' => 'delete_product_categories',
                'table_name' => 'product_categories',
                'created_at' => '2017-12-10 02:51:30',
                'updated_at' => '2017-12-10 02:51:30',
                'permission_group_id' => NULL,
            ),
            54 => 
            array (
                'id' => 70,
                'key' => 'browse_product_brand',
                'table_name' => 'product_brand',
                'created_at' => '2017-12-10 04:50:20',
                'updated_at' => '2017-12-10 04:50:20',
                'permission_group_id' => NULL,
            ),
            55 => 
            array (
                'id' => 71,
                'key' => 'read_product_brand',
                'table_name' => 'product_brand',
                'created_at' => '2017-12-10 04:50:20',
                'updated_at' => '2017-12-10 04:50:20',
                'permission_group_id' => NULL,
            ),
            56 => 
            array (
                'id' => 72,
                'key' => 'edit_product_brand',
                'table_name' => 'product_brand',
                'created_at' => '2017-12-10 04:50:20',
                'updated_at' => '2017-12-10 04:50:20',
                'permission_group_id' => NULL,
            ),
            57 => 
            array (
                'id' => 73,
                'key' => 'add_product_brand',
                'table_name' => 'product_brand',
                'created_at' => '2017-12-10 04:50:20',
                'updated_at' => '2017-12-10 04:50:20',
                'permission_group_id' => NULL,
            ),
            58 => 
            array (
                'id' => 74,
                'key' => 'delete_product_brand',
                'table_name' => 'product_brand',
                'created_at' => '2017-12-10 04:50:20',
                'updated_at' => '2017-12-10 04:50:20',
                'permission_group_id' => NULL,
            ),
            59 => 
            array (
                'id' => 75,
                'key' => 'browse_bank_account',
                'table_name' => 'bank_account',
                'created_at' => '2017-12-29 03:48:36',
                'updated_at' => '2017-12-29 03:48:36',
                'permission_group_id' => NULL,
            ),
            60 => 
            array (
                'id' => 76,
                'key' => 'read_bank_account',
                'table_name' => 'bank_account',
                'created_at' => '2017-12-29 03:48:36',
                'updated_at' => '2017-12-29 03:48:36',
                'permission_group_id' => NULL,
            ),
            61 => 
            array (
                'id' => 77,
                'key' => 'edit_bank_account',
                'table_name' => 'bank_account',
                'created_at' => '2017-12-29 03:48:36',
                'updated_at' => '2017-12-29 03:48:36',
                'permission_group_id' => NULL,
            ),
            62 => 
            array (
                'id' => 78,
                'key' => 'add_bank_account',
                'table_name' => 'bank_account',
                'created_at' => '2017-12-29 03:48:36',
                'updated_at' => '2017-12-29 03:48:36',
                'permission_group_id' => NULL,
            ),
            63 => 
            array (
                'id' => 79,
                'key' => 'delete_bank_account',
                'table_name' => 'bank_account',
                'created_at' => '2017-12-29 03:48:36',
                'updated_at' => '2017-12-29 03:48:36',
                'permission_group_id' => NULL,
            ),
            64 => 
            array (
                'id' => 80,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2017-12-29 03:59:19',
                'updated_at' => '2017-12-29 03:59:19',
                'permission_group_id' => NULL,
            ),
            65 => 
            array (
                'id' => 81,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2017-12-29 03:59:19',
                'updated_at' => '2017-12-29 03:59:19',
                'permission_group_id' => NULL,
            ),
            66 => 
            array (
                'id' => 82,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2017-12-29 03:59:19',
                'updated_at' => '2017-12-29 03:59:19',
                'permission_group_id' => NULL,
            ),
            67 => 
            array (
                'id' => 83,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2017-12-29 03:59:20',
                'updated_at' => '2017-12-29 03:59:20',
                'permission_group_id' => NULL,
            ),
            68 => 
            array (
                'id' => 84,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2017-12-29 03:59:20',
                'updated_at' => '2017-12-29 03:59:20',
                'permission_group_id' => NULL,
            ),
            69 => 
            array (
                'id' => 85,
                'key' => 'browse_courier',
                'table_name' => 'courier',
                'created_at' => '2017-12-29 05:37:24',
                'updated_at' => '2017-12-29 05:37:24',
                'permission_group_id' => NULL,
            ),
            70 => 
            array (
                'id' => 86,
                'key' => 'read_courier',
                'table_name' => 'courier',
                'created_at' => '2017-12-29 05:37:24',
                'updated_at' => '2017-12-29 05:37:24',
                'permission_group_id' => NULL,
            ),
            71 => 
            array (
                'id' => 87,
                'key' => 'edit_courier',
                'table_name' => 'courier',
                'created_at' => '2017-12-29 05:37:24',
                'updated_at' => '2017-12-29 05:37:24',
                'permission_group_id' => NULL,
            ),
            72 => 
            array (
                'id' => 88,
                'key' => 'add_courier',
                'table_name' => 'courier',
                'created_at' => '2017-12-29 05:37:24',
                'updated_at' => '2017-12-29 05:37:24',
                'permission_group_id' => NULL,
            ),
            73 => 
            array (
                'id' => 89,
                'key' => 'delete_courier',
                'table_name' => 'courier',
                'created_at' => '2017-12-29 05:37:24',
                'updated_at' => '2017-12-29 05:37:24',
                'permission_group_id' => NULL,
            ),
            74 => 
            array (
                'id' => 90,
                'key' => 'browse_payment_channel',
                'table_name' => 'payment_channel',
                'created_at' => '2018-01-03 15:43:52',
                'updated_at' => '2018-01-03 15:43:52',
                'permission_group_id' => NULL,
            ),
            75 => 
            array (
                'id' => 91,
                'key' => 'read_payment_channel',
                'table_name' => 'payment_channel',
                'created_at' => '2018-01-03 15:43:52',
                'updated_at' => '2018-01-03 15:43:52',
                'permission_group_id' => NULL,
            ),
            76 => 
            array (
                'id' => 92,
                'key' => 'edit_payment_channel',
                'table_name' => 'payment_channel',
                'created_at' => '2018-01-03 15:43:52',
                'updated_at' => '2018-01-03 15:43:52',
                'permission_group_id' => NULL,
            ),
            77 => 
            array (
                'id' => 93,
                'key' => 'add_payment_channel',
                'table_name' => 'payment_channel',
                'created_at' => '2018-01-03 15:43:52',
                'updated_at' => '2018-01-03 15:43:52',
                'permission_group_id' => NULL,
            ),
            78 => 
            array (
                'id' => 94,
                'key' => 'delete_payment_channel',
                'table_name' => 'payment_channel',
                'created_at' => '2018-01-03 15:43:52',
                'updated_at' => '2018-01-03 15:43:52',
                'permission_group_id' => NULL,
            ),
            79 => 
            array (
                'id' => 95,
                'key' => 'browse_email_template',
                'table_name' => 'email_template',
                'created_at' => '2018-01-04 19:19:12',
                'updated_at' => '2018-01-04 19:19:12',
                'permission_group_id' => NULL,
            ),
            80 => 
            array (
                'id' => 96,
                'key' => 'read_email_template',
                'table_name' => 'email_template',
                'created_at' => '2018-01-04 19:19:12',
                'updated_at' => '2018-01-04 19:19:12',
                'permission_group_id' => NULL,
            ),
            81 => 
            array (
                'id' => 97,
                'key' => 'edit_email_template',
                'table_name' => 'email_template',
                'created_at' => '2018-01-04 19:19:12',
                'updated_at' => '2018-01-04 19:19:12',
                'permission_group_id' => NULL,
            ),
            82 => 
            array (
                'id' => 98,
                'key' => 'add_email_template',
                'table_name' => 'email_template',
                'created_at' => '2018-01-04 19:19:12',
                'updated_at' => '2018-01-04 19:19:12',
                'permission_group_id' => NULL,
            ),
            83 => 
            array (
                'id' => 99,
                'key' => 'delete_email_template',
                'table_name' => 'email_template',
                'created_at' => '2018-01-04 19:19:12',
                'updated_at' => '2018-01-04 19:19:12',
                'permission_group_id' => NULL,
            ),
        ));
        
        
    }
}