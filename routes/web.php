<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/nav-select',[UserAuth::class,'navSelect'])->name('nav_select');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');


//Admin Routes  
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin', 'index')->name('admin_home');
    Route::get('/admin/members', 'Members')->name('admin_show_members');
    Route::get('/admin/admin-members', 'adminMembers')->name('admin_show_admin_members');
    Route::get('/admin/blog/create-post', 'showCreateBlogPost')->name('admin_show_create_blog');
    Route::post('/admin/blog/create-post', 'createBlogPost')->name('admin_create_blog_post');
    Route::get('/admin/blog-post', 'showBlogPost')->name('admin_show_blog_post');
    Route::get('/admin/create-events', 'creatUpcomingEvents')->name('admin_creat_event');
    Route::post('/admin/create-events', 'createEvent')->name('admin_post_event');
    Route::get('/admin/events', 'showUpcomingEvents')->name('admin_show_event_post');



});


//User Routes
Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'index')->name('user_home');
    Route::get('/blog', 'showblog')->name('user_blog');
    Route::get('/events', 'showEvents')->name('user_events');
    Route::get('/contact-us', 'showContactUs')->name('user_contact_us');
    Route::get('/about-us', 'showAboutUs')->name('user_about_us');

});

//General Routes  
Route::controller(UserController::class)->group(function(){
    Route::get('/dashboard/account-settings', 'accountSettings')->name('account_Settings');
    //Route::get('/admin/members', 'Members')->name('admin_show_members');
    //Route::get('/admin/admin-members', 'adminMembers')->name('admin_show_admin_members');

});
