<?php

use App\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Comment::truncate();

        Comment::insert([
            [ 
                'post_id' => 4,
                'name' => 'Kahan',
                'email' => 'kahan222@voila.com',
                'comment' => 'good game but old',
                'created_at' => now(),
            ],
            [ 
                'post_id' => 5,
                'name' => 'Kevin Martin',
                'email' => 'kevin221@voila.com',
                'comment' => "Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo var sed efficitur turpis gilla sed sit amet finibus eros.",
                'created_at' => now(),
            ],
            [ 
                'post_id' => 5,
                'name' => 'Sarah Albert',
                'email' => 'sarah221@voila.com',
                'comment' => "Est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo var sed efficitur turpis gilla sed sit amet finibus eros",
                'created_at' => now(),
            ],
            [ 
                'post_id' => 5,
                'name' => 'Ratef',
                'email' => 'ratef221@voila.com',
                'comment' => "Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo var sed efficitur turpis gilla sed sit amet finibus eros.",
                'created_at' => now(),
            ],
            [ 
                'post_id' => 4,
                'name' => 'Author',
                'email' => 'author201@voila.com',
                'comment' => "Thank you Kahan",
                'created_at' => now(),
            ],
            [ 
                'post_id' => 4,
                'name' => 'Tatef',
                'email' => 'tatef201@voila.com',
                'comment' => "The majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don't look even slightly believable.",
                'created_at' => now(),
            ],
            [ 
                'post_id' => 1,
                'name' => 'Watef',
                'email' => 'watef@voila.com',
                'comment' => "Simply free textinh randomised words which don't look even slightly believable.",
                'created_at' => now(),
            ],
            [ 
                'post_id' => 2,
                'name' => 'Yatef',
                'email' => 'yatef201@voila.com',
                'comment' => "Good work! Keep up publishing these works",
                'created_at' => now(),
            ],
            [ 
                'post_id' => 4,
                'name' => 'Yatef',
                'email' => 'yatef201@voila.com',
                'comment' => "I ike your work. Hope you can explain more in your post!",
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
