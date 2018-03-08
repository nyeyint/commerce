<?php

use Illuminate\Database\Seeder;

class TokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tokens')->delete();
        
        \DB::table('tokens')->insert(array (
            0 => 
            array (
                'id' => 11,
                'user_id' => '15',
                'access_token' => 'eyJpdiI6Inl2clBJMm1CaFZFallzbjVcLzN1TnN3PT0iLCJ2YWx1ZSI6IjRxRXZHUloxWHR0dHFnUFFzMkRhdnJWT3JUalBcLzhySnBhNUtocERoNWZXa1lPcklrdElEU0tnbkdqMjJNbmNZRGZIWlpJNHc4OXpvVGhyRFRIdlwvZnc9PSIsIm1hYyI6IjVjNDdkNWE0NTg0ZGZmMmMxMmE3ZjMzNjM0MGM1YmI1MmM5YmM3ODVlYWM1NmEwNzgwMDVjNmU2ZmMzNjc3ZGIifQ==',
                'token_secret' => 'eyJpdiI6InpGdXhmbFwvanl1TnFoWFd0cmlNMzZBPT0iLCJ2YWx1ZSI6InVKUW4yanJwVnIrOVVRUmVoaXRUNlwvNUNKdTBjTzV6XC9FVzVybzdtS0J3THJIOWR0bmN0RmRCQmhqbnF6SlwvVUVtQWJlWkFxNVBmck8zdjM2WlFya2xRPT0iLCJtYWMiOiJmZWIxMjMzODUyMTA3MDNkMDQ1NjUwOTA1NGJhNmNmYjk2ZmFjNjMyYTRkMDdkNjM3MGQ4NzkzNTA1MmM4MmNmIn0=',
                'provider' => 'twitter',
                'created_at' => '2017-12-07 17:31:52',
                'updated_at' => '2017-12-07 17:31:52',
            ),
            1 => 
            array (
                'id' => 14,
                'user_id' => '34',
                'access_token' => 'eyJpdiI6Im1hSUdKdHZMXC9YbVRMVVJUVDIrMDdBPT0iLCJ2YWx1ZSI6InRTbGo5NkN0S3EwSVN1SHB5czJiRU51RDhqZW1WS1R1NmVkK2h0VFhlT3FQbit3c0JHQmsybGdCNDBLN2Z5Ylp1RzNVMDh2VVp4SXYySXNEMEdcL1l1RklPTUNnRDZNXC9WMk9Vdm1lV2tyWGg5cVppcnp0cVJpa1JYUG44bHNIeE5qSkRhNkNYT1llc3RuTEpGalRRSGU5TW1EbkYwaE9JOU0wMFc3MTQ0QVRFbVJiUGtHdDVLbFlWcDNXM1M0dE55U0txNU1MTHByXC9DTGFCS1RhVGxIekltQUZrQUhZRnR0dWVJc2dTc1BLRnZuSEhHOGh5djdiVm1KZ2FBanJcL2UzIiwibWFjIjoiNmQ4YWQwNTA1MjhkMTE2MzcxNTg5ZTY5Yjk1Nzk0ODc3ZTQyZDNiZjk5MzEyZjEzZTgyNGZkMDkxOTE0NmI1ZiJ9',
                'token_secret' => NULL,
                'provider' => 'facebook',
                'created_at' => '2017-12-08 20:27:09',
                'updated_at' => '2017-12-08 20:27:09',
            ),
            2 => 
            array (
                'id' => 15,
                'user_id' => '39',
                'access_token' => 'eyJpdiI6IkdLNXRMZ2VsTHpnd0hCNEFGMktrcEE9PSIsInZhbHVlIjoicStld09samxoMlBpXC9yUDJOSEhSa3BDelQ2c050R3k3V2ZQK0RDM0xndlUyc3BiVlcxSUwxRjZaR0tabENobm9IZGFROHdnNlBDQjJOYVV1T096UWdaNHdDemJ5bGxLNklHMkN5SUJvcldTM1NWejg2SDloNlZUT3FqVVY1cDJvNzJ4Skd0VVRFNlhnaUpkbGZobkw1N3ZCZCsybGRPdklnREpXeEgzN0x0MjhzTHRhTGlGamtsWExlWVwvd3hGZ3hnRnNLQnJOTTdFTlJBSDMzNno4Z1ZFNUhZZmo2b3JRbW0xd3N5cFh4TDRja1FGOFwvakF2Tml5aGtxRmFUbEFSMSIsIm1hYyI6IjI4MTIwOGY1NjMzNzRhNzExZWFjNjkzOGZmZmRmNTA1YTk0NDM4YTM1YmVlMTFlMzViNGQ0ZDgxNDljMGRlMjAifQ==',
                'token_secret' => NULL,
                'provider' => 'facebook',
                'created_at' => '2017-12-24 02:34:24',
                'updated_at' => '2017-12-24 02:34:24',
            ),
        ));
        
        
    }
}