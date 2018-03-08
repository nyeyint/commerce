<?php

use Illuminate\Database\Seeder;

class BankAccountTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bank_account')->delete();
        
        
        
    }
}