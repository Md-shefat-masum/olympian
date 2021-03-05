<?php

use App\Contactus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Contactus::truncate();

        Contactus::insert([
            [ 
                'conus_name' => 'Arun Ahmed',
                'conus_email' => 'arun111@voila.com',
                'conus_phone' => '000111222',
                'conus_mess' => 'We should work hard and fast. You work very slow.',
                'conus_status' => 1,
                'created_at' => now(),
            ],
            [ 
                'conus_name' => 'Tina Ahmed',
                'conus_email' => 'tina111@voila.com',
                'conus_phone' => '000011113333',
                'conus_mess' => 'Well done!',
                'conus_status' => 1,
                'created_at' => now(),
            ],
            [ 
                'conus_name' => 'Shina Ahmed',
                'conus_email' => 'shina111@voila.com',
                'conus_phone' => '000011114444',
                'conus_mess' => 'You should improve your game quality.',
                'conus_status' => 1,
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
