<?php

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Category::truncate();

        Category::insert([
            [ 
                'cate_name' => 'Gaming',
                'cate_slug' => Str::slug('gaming', '-'),
                'created_at' => now(),
            ],
            [ 
                'cate_name' => 'Matches',
                'cate_slug' => Str::slug('matches', '-'),
                'created_at' => now(),
            ],
            [ 
                'cate_name' => 'Video Games',
                'cate_slug' => Str::slug('Video Games', '-'),
                'created_at' => now(),
            ],
            [ 
                'cate_name' => 'Esports',
                'cate_slug' => Str::slug('Esports', '-'),
                'created_at' => now(),
            ],
            [ 
                'cate_name' => 'Champions',
                'cate_slug' => Str::slug('Champions', '-'),
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
