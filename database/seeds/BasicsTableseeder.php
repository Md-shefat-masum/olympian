<?php

use App\Basic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class BasicsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Basic::truncate();

        Basic::insert([
            [ 
                'basic_name' => 'Sintix',
                'basic_title' => 'Sintix - Digital Video Gaming and Consol HTML Template',
                'basic_subtitle' => 'Welcome to game developement studio',
                'basic_aboutus' => 'There are many variations of passages of lorem ipsum is simply free text available but the majority have suffered alteration in some form by injected.',
                'basic_details' => '',
                'basic_favicon' => 'WifH6qKO6cpCHykBLy8fd5Kty6Y5XiYz59TXT5hv.png',
                'basic_logo' => 'PJ6hHXor3xetbll4KSNoG8QOW84NnUINGnRYu2ky.png',
                'basic_stickylogo' => 'KJiUGp7uKC5ZMyxuGEkLJV4vRUNyGemdxH9AbnrR.png',
                'basic_flogo' => 'D82dFhx3DyWviEl4lMXBE2s2nFxitRFTkwQn8JSK.png',
                'basic_status' => 1,
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
