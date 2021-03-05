<?php

use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Post::truncate();

        Post::insert([
            [ 
                'post_title' => 'what happened to esports games this weekend',
                'post_slug' => 'what-happened-to-esports-games-this-weekend',
                'user_id' => 1,
                'post_body1' => "There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don't look even slightly believable. There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don't look even slightly believable.",
                'post_body2' => '',
                'post_body3' => '',
                'post_body4' => '',
                'post_image' => 'wU2UIuXzCMN4M6y6pU3UPqfM1rcnHWPXjZkTgE97.jpg',
                'post_thumb' => '',
                'created_at' => now(),
            ],
            [ 
                'post_title' => 'IMPORTANT BRANDS HAVE GIVEN US THEIR TRUST',
                'post_slug' => 'important-brands-have-given-us-their-trust',
                'user_id' => 2,
                'post_body1' => "There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don't look even slightly believable. There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don't look even slightly believable.",
                'post_body2' => '',
                'post_body3' => '',
                'post_body4' => '',
                'post_image' => 'TkCVPxTJHxVzi1d0lfU0u7HkfbnATmDhnhs5qPio.jpg',
                'post_thumb' => '',
                'created_at' => now(),
            ],
            [ 
                'post_title' => 'LION KING VS WOLF SMART UPCOMING MATCHES',
                'post_slug' => 'lion-king-vs-wolf-smart-upcoming-matches',
                'user_id' => 1,
                'post_body1' => "There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don't look even slightly believable. There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don't look even slightly believable.",
                'post_body2' => '',
                'post_body3' => '',
                'post_body4' => '',
                'post_image' => 'T06txPtktDEzytTdGMCVPlLzDF4grCLZSH58jhJb.jpg',
                'post_thumb' => '4G5Cl361XelOwnQq3LSv3xbnHTrTBHr22LHE5qYO.jpg',
                'created_at' => now(),
            ],
            [ 
                'post_title' => 'what happened to esports games this weekend',
                'post_slug' => 'what-happened-to-esports-games-this-weekend',
                'user_id' => 2,
                'post_body1' => "There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don't look even slightly believable. There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don't look even slightly believable.",
                'post_body2' => '',
                'post_body3' => '',
                'post_body4' => '',
                'post_image' => 'tpl6MmLQbfI4pwB6Nd6lFEzbpRG7ijigitAZZAdK.jpg',
                'post_thumb' => 'tdlfMyiAemXfYvBlNmQ7CWKxQy77MXcE4xjIFsH2.jpg',
                'created_at' => now(),
            ],
            [ 
                'post_title' => 'esports games this weekend',
                'post_slug' => 'esports-games-this-weekend',
                'user_id' => 1,
                'post_body1' => "There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.",
                'post_body2' => "Aelltes port lacus quis enim ipsu var sed efficitur turpis gilla sed sit lorem ipsum is simply free text available amet finibus eros. Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Lorem is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                'post_body3' => "Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the new design printng and type setting Ipsum Take a look at our round up of the best shows coming soon to your telly box has been the is industrys. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has industr standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
                'post_body4' => "",
                'post_image' => 'Zsk29PVkRRT5ajP9x6cWniIY2GvTcEXrb5aCJa5q.jpg',
                'post_thumb' => 'M0dwDS3DklzRbO1Ke5VRJhHnfQ6CJkft41zrMorJ.jpg',
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
