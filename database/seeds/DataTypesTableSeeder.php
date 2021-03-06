<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2017-12-04 00:33:31',
                'updated_at' => '2017-12-04 00:33:31',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2017-12-04 00:33:31',
                'updated_at' => '2017-12-04 00:33:31',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2017-12-04 00:33:31',
                'updated_at' => '2017-12-04 00:33:31',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2017-12-04 00:33:31',
                'updated_at' => '2017-12-10 01:45:04',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2017-12-04 00:33:31',
                'updated_at' => '2017-12-04 00:33:31',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2017-12-04 00:33:32',
                'updated_at' => '2017-12-04 00:33:32',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'sliders',
                'slug' => 'sliders',
                'display_name_singular' => 'Slider',
                'display_name_plural' => 'Sliders',
                'icon' => 'voyager-photo',
                'model_name' => 'App\\Slider',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2017-12-07 17:48:52',
                'updated_at' => '2017-12-07 17:48:52',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'products',
                'slug' => 'products',
                'display_name_singular' => 'Product',
                'display_name_plural' => 'Products',
                'icon' => 'voyager-bag',
                'model_name' => 'App\\Product',
                'policy_name' => NULL,
                'controller' => 'ProductController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2017-12-10 02:06:54',
                'updated_at' => '2017-12-10 02:45:14',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'product_categories',
                'slug' => 'product-categories',
                'display_name_singular' => 'Product Category',
                'display_name_plural' => 'Product Categories',
                'icon' => 'voyager-archive',
                'model_name' => 'App\\ProductCategory',
                'policy_name' => NULL,
                'controller' => 'ProductCategoriesController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'created_at' => '2017-12-10 02:51:30',
                'updated_at' => '2017-12-10 02:53:23',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'product_brand',
                'slug' => 'product-brand',
                'display_name_singular' => 'Product Brand',
                'display_name_plural' => 'Product Brands',
                'icon' => 'voyager-certificate',
                'model_name' => 'App\\ProductBrand',
                'policy_name' => NULL,
                'controller' => 'ProductBrandController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'created_at' => '2017-12-10 04:50:20',
                'updated_at' => '2017-12-10 04:50:20',
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'bank_account',
                'slug' => 'bank-account',
                'display_name_singular' => 'Bank Account',
                'display_name_plural' => 'Bank Accounts',
                'icon' => 'voyager-wallet',
                'model_name' => 'App\\BankAccount',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2017-12-29 03:48:36',
                'updated_at' => '2017-12-29 03:50:30',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'orders',
                'slug' => 'orders',
                'display_name_singular' => 'Order',
                'display_name_plural' => 'Orders',
                'icon' => 'voyager-basket',
                'model_name' => 'App\\Order',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2017-12-29 03:59:19',
                'updated_at' => '2017-12-29 04:02:25',
            ),
            12 => 
            array (
                'id' => 17,
                'name' => 'courier',
                'slug' => 'courier',
                'display_name_singular' => 'Courier',
                'display_name_plural' => 'Couriers',
                'icon' => 'voyager-truck',
                'model_name' => 'App\\Courier',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2017-12-29 05:37:24',
                'updated_at' => '2017-12-29 05:55:27',
            ),
            13 => 
            array (
                'id' => 18,
                'name' => 'payment_channel',
                'slug' => 'payment-channel',
                'display_name_singular' => 'Payment Channel',
                'display_name_plural' => 'Payment Channels',
                'icon' => 'voyager-credit-cards',
                'model_name' => 'App\\PaymentChannel',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-01-03 15:43:52',
                'updated_at' => '2018-01-03 15:43:52',
            ),
            14 => 
            array (
                'id' => 19,
                'name' => 'email_template',
                'slug' => 'email-template',
                'display_name_singular' => 'Email Template',
                'display_name_plural' => 'Email Templates',
                'icon' => 'voyager-mail',
                'model_name' => 'App\\EmailTemplate',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'created_at' => '2018-01-04 19:19:12',
                'updated_at' => '2018-01-04 19:19:12',
            ),
        ));
        
        
    }
}