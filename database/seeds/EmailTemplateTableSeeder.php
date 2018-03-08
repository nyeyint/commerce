<?php

use Illuminate\Database\Seeder;

class EmailTemplateTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_template')->delete();
        
        \DB::table('email_template')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Email Activation',
                'subject' => 'Hello [user_name], Please Activate your [app_name] account!',
                'slug' => 'user.email_activation',
                'template' => '<h1>Halo, [user_name]!</h1>
<p>You receiving this email because you are registered on <a href="[app_url]">[app_name]</a></p>
<p>To Activate your account, Please simply click button below.</p>
<p>&nbsp;</p>
<p>[button url=activate_account]</p>
<p>&nbsp;</p>
<p>Thanks!, [app_name]</p>',
                'created_at' => '2018-01-04 19:31:00',
                'updated_at' => '2018-01-08 13:07:37',
            ),
        ));
        
        
    }
}