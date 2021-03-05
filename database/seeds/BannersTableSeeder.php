<?php

use App\Banner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Banner::truncate();

        Banner::insert([
            [ 
                'ban_title' => 'Welcome to sintix Games Studio!',                
                'ban_button' => 'Our Games',
                'ban_url' => '#',
                'photo' => 'Bs3IWKWidjizBTF5H3LAYUShkX6yoHYIF3NvsQne.jpg',
                'ban_status' => 1,
                'created_at' => now(),
            ],
            [ 
                'ban_title' => 'Welcome to sintix Games Studio!',                
                'ban_button' => 'Our Games',
                'ban_url' => '#',
                'photo' => 'GUt0bl71tdT5rri2068QUPhSnxHyA5scG15QZCXd.jpg',
                'ban_status' => 1,
                'created_at' => now(),
            ],
            [ 
                'ban_title' => 'Welcome to sintix Games Studio!',                
                'ban_button' => 'Our Games',
                'ban_url' => '#',
                'photo' => 'utCPp5zKWrCBLuyahXeACFmgKJM42Ai0ssJNvW0s.jpg',
                'ban_status' => 1,
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
