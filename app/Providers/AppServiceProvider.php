<?php

namespace App\Providers;

use App\Game;
use App\Page;
use App\Post;
use App\User;
use App\About;
use App\Basic;
use App\Banner;
use App\Client;
use App\Social;
use App\Gallery;
use App\Category;
use App\ContactInformation;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        View::composer(['website.website', 'website.about'], function($view) {
            $banners = Banner::where('ban_status', 1)->get();
            $clients = Client::all();
            $users = User::select('name','designation', 'twitter', 'fb', 'linkedin', 'photo')->latest('id')->where('status', 1)->where('id', '!=', 1)->take(4)->get();
            $view->with(['banners' => $banners, 'clients' => $clients, 'users' => $users]);
        });

        View::composer('website.about', function($view) {
            $clients = Client::all();
            $aboutus = About::where('about_status', 1)->where('id', 1)->firstOrFail();
            $view->with(['clients' => $clients, 'aboutus' => $aboutus]);
        });

        View::composer(['website.game', 'website.website', 'website.gamedetails'], function($view) {
            $gms = Game::latest('id')->where('game_status', 1)->paginate(6);
            $gmshome = Game::latest('id')->where('game_status', 1)->take(3)->get();
            $page = Page::where('id', 1)->firstOrFail();
            $view->with(['gms' => $gms, 'gmshome' => $gmshome, 'page' => $page]);
        });
        
        View::composer(['website.gallery', 'website.website'], function($view) {
            $galleriespaginate = Gallery::latest('id')->paginate(9);
            $gallerieshome = Gallery::latest('id')->take(7)->get();
            $latestPosts = Post::latest('id')->take(4)->get();
            $view->with(['gallerieshome' => $gallerieshome, 'galleriespaginate' => $galleriespaginate, 'latestPosts' => $latestPosts]);
        });

        View::composer('website.blogdetails', function($view) {
            $page = Page::where('id', 1)->firstOrFail();
            $recentPosts = Post::latest('id')->whereNotNull('post_thumb')->take(3)->get();
            $categories = Category::where('cate_status', 1)->take(5)->get();
            $view->with([ 'page' => $page, 'recentPosts' => $recentPosts, 'categories' => $categories]);
        });

        View::composer(['website.contact', 'website.game', 'website.gallery', 'website.blog'], function($view) {
            $page = Page::where('id', 1)->firstOrFail();
            $posts = Post::latest('id')->paginate(3);
            $recentPosts = Post::latest('id')->whereNotNull('post_thumb')->take(3)->get();
            $categories = Category::where('cate_status', 1)->take(5)->get();
            $view->with(['page' => $page, 'posts' => $posts, 'categories' => $categories, 'recentPosts' => $recentPosts]);
        });

        View::composer(['layouts.website', 'website.contact'], function ($view) {
            $social = Social::where('sm_status', 1)->where('id', 1)->firstOrFail();
            $conInfo = ContactInformation::where('ci_status', 1)->where('id', 1)->firstOrFail();
            $basic = Basic::where('basic_status', 1)->where('id', 1)->firstOrFail();
            $games = Game::latest('id')->where('game_status', 1)->take(5)->get();
            $view->with(['social' => $social, 'basic' => $basic, 'conInfo' => $conInfo, 'games' => $games]);
        });
    }
}
