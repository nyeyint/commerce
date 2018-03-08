<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2016_01_01_000000_add_voyager_user_fields',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2016_01_01_000000_create_data_types_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2016_01_01_000000_create_pages_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2016_01_01_000000_create_posts_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2016_02_15_204651_create_categories_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2016_05_19_173453_create_menu_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2016_10_21_190000_create_roles_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2016_10_21_190000_create_settings_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2016_11_30_135954_create_permission_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2016_11_30_141208_create_permission_role_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2016_12_26_201236_data_types__add__server_side',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2017_01_13_000000_add_route_to_menu_items_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2017_01_14_005015_create_translations_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2017_01_15_000000_add_permission_group_id_to_permissions_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2017_01_15_000000_create_permission_groups_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2017_01_15_000000_make_table_name_nullable_in_permissions_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2017_03_06_000000_add_controller_to_data_types_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2017_04_11_000000_alter_post_nullable_fields_table',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2017_04_21_000000_add_order_to_data_rows_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2017_07_05_210000_add_policyname_to_data_types_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2017_08_05_000000_add_group_to_settings_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2017_12_03_093833_add_access_token_column_to_users_table',
                'batch' => 2,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2017_12_03_094121_create_tokens_table',
                'batch' => 3,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2017_12_06_161909_create_jobs_table',
                'batch' => 3,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2017_12_06_162137_create_failed_jobs_table',
                'batch' => 3,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2017_12_07_022018_add_secret_token_for_twitter_to_tokens_table',
                'batch' => 4,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2017_12_08_014050_add_additional_fields_to_users_table',
                'batch' => 5,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2017_12_15_160527_create_carts_table',
                'batch' => 6,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2017_12_15_160821_add_cart_id_into_users_table',
                'batch' => 6,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2017_12_29_045926_create_order_details_table',
                'batch' => 7,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2017_12_29_175134_create_newsletter_email_table',
                'batch' => 8,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2017_12_30_053143_create_addresses_table',
                'batch' => 8,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2017_12_30_082858_add_product_code_to_product_table',
                'batch' => 9,
            ),
        ));
        
        
    }
}