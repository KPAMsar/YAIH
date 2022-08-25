<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/nav-select',[UserAuth::class])->name('nav_select');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');


//Admin Routes  
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin', 'index')->name('admin_home');
    Route::get('/admin/members', 'Members')->name('admin_show_members');
    Route::get('/admin/admin-members', 'adminMembers')->name('admin_show_admin_members');

});


//User Routes
Route::controller(FrontendController::class)->group(function(){
    Route::get('/user', 'index')->name('user_home');

});