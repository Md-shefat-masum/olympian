<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Game;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('visitor');
    }

    public function index() {
        $usersCount = User::count();
        $gamesCount = Game::count();
        $categoriesCount = Category::count();
        $postsCount = Post::count();
        return view('admin.dashboard.dashboard', compact('usersCount', 'gamesCount', 'categoriesCount', 'postsCount'));
    }
}
