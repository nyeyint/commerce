<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(BankAccountTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CourierTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(EmailTemplateTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(NewsletterEmailTableSeeder::class);
        $this->call(OrderDetailsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PaymentChannelTableSeeder::class);
        $this->call(PermissionGroupsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ProductBrandTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(TokensTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
    }
}
