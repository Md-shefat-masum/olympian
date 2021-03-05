<?php

use App\Social;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SocialsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Social::truncate();

        Social::insert([
            [ 
                'sm_facebook' => '#',
                'sm_twitter' => '#',
                'sm_linkedin' => '#',
                'sm_pinterest' => '#',
                'sm_instagram' => '#',
                'sm_youtube' => '#',
                'sm_google' => '#',
                'sm_status' => 1,
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
