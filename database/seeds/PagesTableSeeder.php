<?php

use App\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Page::truncate();

        Page::insert([
            [ 
                'pagename1' => 'Games',
                'link1' => 'http://localhost/games',
                'pagename2' => 'Gallery',
                'link2' => 'http://localhost/gallery',
                'pagename3' => 'Blog',
                'link3' => 'http://localhost/blog',
                'pagename4' => 'Contact',
                'link4' => 'http://localhost/contact',
                'home_link' => 'http://localhost/',
                'game_pagebanner' => 'OTPM7Rv9BYazt3pacb9iSwDsUPCaLidNFGeRW1Zv.jpg',
                'gallery_pagebanner' => 'gD0aGOfMkkiU0qWkXJUTN6JteGF3E4P8Lb2XdBjz.jpg',
                'blog_pagebanner' => 'GEOzW3KlaMXi3aUhJ2RPWCca24tOvuPdaL6zoqni.jpg',
                'contact_pagebanner' => 'oXiZ4tag0wSkBHyWm2ZDTEQhabqny1orYO2qvGhP.jpg',
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
