<?php

use App\About;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class AboutsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        About::truncate();

        About::insert([
            [ 
                'about_pagename' => 'About Us',
                'about_toplinkone' => url('/'),
                'about_toplinktwo' => url('/about'),
                'about_pagebanner' => '4aUfkr2G9dEVAjcoeOrFMpoAHeSKQjHtwexuPdJN.jpg',
                'about_title' => 'Discover Sintix',
                'about_description1' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.",
                'about_description2' => "Lorem ipsumum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'about_description3' => '',
                'about_button' => 'View Games',
                'about_url' => '#',
                'about_photo' => 'o2FRdkGdDYfrvI6MjSdWtxMie4ZDAB0Y7S2al1he.jpg',
                'about_status' => 1,
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
