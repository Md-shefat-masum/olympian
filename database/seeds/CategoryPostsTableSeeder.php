<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategoryPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();

        $data = [
            ['post_id' => 5, 'category_id' => 2],
            ['post_id' => 5, 'category_id' => 4],
            ['post_id' => 4, 'category_id' => 3],
            ['post_id' => 4, 'category_id' => 4],            
            ['post_id' => 4, 'category_id' => 5],            
            ['post_id' => 3, 'category_id' => 1],            
            ['post_id' => 3, 'category_id' => 2],            
            ['post_id' => 2, 'category_id' => 4],            
            ['post_id' => 2, 'category_id' => 5],            
            ['post_id' => 1, 'category_id' => 2],            
            ['post_id' => 1, 'category_id' => 3],            
        ];

        // Model::insert($data); // Eloquent approach
        DB::table('category_posts')->insert($data); // Query Builder approach

        Schema::enableForeignKeyConstraints();
    }
}
