<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'WebsiteController@index')->name('website.home');
// Route::get('/home', 'HomeController@index')->name('home');




Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth']], function() {

    // dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');

    // users
    Route::post('/users/unpublish', 'UserController@unpublish')->name('users.unpublish');
    Route::resource('/users', 'UserController')->except('destroy');

    // banners
    Route::post('/banners/unpublish', 'BannerController@unpublish')->name('banners.unpublish');
    Route::resource('/banners', 'BannerController')->except('destroy');

    // clients
    Route::post('/clients/unpublish', 'ClientController@unpublish')->name('clients.unpublish');
    Route::resource('/clients', 'ClientController')->except('destroy');

    

    // manage
    Route::get('/manage/basic', 'ManageController@basic')->name('manage.basic');
    Route::post('/manage/basic/update', 'ManageController@update_basic')->name('manage.basic.update');
    Route::get('/manage/social', 'ManageController@social')->name('manage.social');
    Route::post('/manage/social/update', 'ManageController@update_social')->name('manage.social.update');
    Route::get('/manage/contact', 'ManageController@contact')->name('manage.contact');
    Route::post('/manage/contact/update', 'ManageController@update_contact')->name('manage.contact.update');

    // about page section
    Route::get('/about', 'AboutController@about')->name('about');
    Route::post('/about/update', 'AboutController@update_about')->name('about.update');

    // page section
    Route::get('/page', 'PageController@page')->name('page');
    Route::post('/page/update', 'PageController@update_page')->name('page.update');

    // contact us
    Route::post('/contactus/unpublish', 'ContactusController@unpublish')->name('contactus.unpublish');
    Route::get('/contactus', 'ContactusController@index')->name('contactus.index');
    Route::get('/contactus/show/{id}', 'ContactusController@show')->name('contactus.show');

    // newsletter
    Route::post('/newsletter/unpublish', 'NewsletterController@unpublish')->name('newsletter.unpublish');
    Route::get('/newsletter', 'NewsletterController@index')->name('newsletter.index');

    // games
    Route::post('/games/unpublish', 'GameController@unpublish')->name('games.unpublish');
    Route::resource('/games', 'GameController')->except('destroy');


    // categories
    Route::post('/categories/unpublish', 'CategoryController@unpublish')->name('categories.unpublish');
    Route::resource('/categories', 'CategoryController')->except(['show', 'destroy']);

    // posts
    Route::post('/posts/unpublish', 'PostController@unpublish')->name('posts.unpublish');
    Route::resource('/posts', 'PostController')->except(['show', 'destroy']);


    // comments
    Route::get('/comments', 'CommentsController@index')->name('comments.index');
    Route::post('/comments/unpublish', 'CommentsController@unpublish')->name('comments.unpublish');

    // posts
    Route::post('/galleries/unpublish', 'GalleryController@unpublish')->name('galleries.unpublish');
    Route::resource('/galleries', 'GalleryController')->except(['show', 'destroy']);


    // profile
     // profile
     Route::get('profile', 'ProfileController@index')->name('profile.index');
     Route::put('profile/update', 'ProfileController@updateProfile')->name('profile.update');
     Route::put('password/update', 'ProfileController@updatePassword')->name('password.update');

});


Route::get('/about', 'AboutController@index')->name('website.about');
Route::get('/contact', 'ContactusController@index')->name('website.contact');
Route::post('/contact/store', 'ContactusController@store')->name('website.contact.store');
Route::post('/newsletter/store', 'NewsletterController@store')->name('website.newsletter');
Route::get('/games', 'GameController@index')->name('website.games');
Route::get('/games/details/{id}', 'GameController@details')->name('website.games.details');
Route::get('/blog', 'BlogController@blog')->name('website.blog');
Route::get('/blog/details/{id}', 'BlogController@details')->name('website.blog.details');
Route::post('comment/{post}', 'CommentsController@store')->name('comment.store');
Route::get('/gallery', 'GalleryController@gallery')->name('website.gallery');


