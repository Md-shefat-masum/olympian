<?php

use App\Game;
use App\Post;
use App\Role;
use App\User;
use App\Client;
use App\Comment;
use App\Category;
use App\Newsletter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Role::truncate();
        User::truncate();
        DB::table('category_posts')->truncate();

        User::flushEventListeners();
        Category::flushEventListeners();
        Post::flushEventListeners();
        Comment::flushEventListeners();
        Game::flushEventListeners();
        Newsletter::flushEventListeners();
        Client::flushEventListeners();
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        // factory(User::class, 50)->create();
        $this->call(BannersTableSeeder::class);
        $this->call(BasicsTableseeder::class);
        $this->call(SocialsTableseeder::class);
        $this->call(ContactInformationsTableseeder::class);
        $this->call(ClientsTableseeder::class);
        $this->call(AboutsTableseeder::class);
        $this->call(ContactusSeeder::class);
        $this->call(NewslettersSeeder::class);
        $this->call(GamesSeederTable::class);
        $this->call(PagesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(CategoryPostsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);

        Schema::enableForeignKeyConstraints();
        
    }

}
