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
    Route::get('/admin/edit-events/{id}', 'adminEditEventPage')->name('admin_edit_an_event');
    Route::get('/admin/edit-events/{id}', 'adminEditEventPage')->name('admin_edit_an_event');
    Route::get('/admin/edit-blog/{id}', 'adminUpdateBlog')->name('admin_edit_a_blog_update');
    Route::put('/admin/edit-blog/{id}', 'updateBlog')->name('admin_blog_update');

    Route::post('/admin/create-events', 'createEvent')->name('admin_post_event');
    Route::get('/admin/events', 'showUpcomingEvents')->name('admin_show_event_post');
    Route::get('/admin/volunteer', 'showUpcomingVolunteer')->name('admin_show_volunteer');
    Route::get('/admin/profile', 'showProfile')->name('admin_show_profile');
    Route::get('/admin/biodata', 'showBiodata')->name('admin_show_biodata');
    Route::post('/admin/biodata/general-info', 'saveGeneralInfo')->name('admin_post_biodata_general_info');
    Route::post('/admin/biodata/bio-data', 'addBio')->name('admin_post_biodata_bio');
    Route::post('/admin/biodata/contact-details', 'saveContact')->name('admin_post_contact');
    Route::post('/admin/biodata/social-links', 'saveSocialLinks')->name('admin_post_social_links');
    Route::post('/admin/biodata/work-experience', 'saveWorkExperience')->name('admin_post_work_experience');
    Route::post('/admin/biodata/skills', 'addSkills')->name('admin_post_skills');
    Route::post('/admin/biodata/add-education', 'addEducation')->name('admin_post_education');
    Route::get('/admin/dashboard/volunteer/profile/{id}', 'showVolunteerProfile')->name('admin_show_volunteer_profile');



});


//User Routes
Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'index')->name('user_home');
    Route::get('/blog', 'showblog')->name('user_blog');
    Route::get('/events', 'showEvents')->name('user_events');
    Route::get('/contact-us', 'showContactUs')->name('user_contact_us');
    Route::get('/about-us', 'showAboutUs')->name('user_about_us');
    Route::post('/volunteer', 'saveVolunteerRequest')->name('user_send_volunteer_request');
    Route::get('/volunteer', 'showVolunteer')->name('user_volunteer');
    Route::get('/who-we-are', 'showWhoWeAre')->name('user_show_who_we_are');
    Route::get('/what-we-do', 'showWhatWeDo')->name('user_show_what_we_do');
    Route::get('/vision-and-mission', 'showVisonAndMission')->name('user_show_vison_mission');
    Route::get('blog-post/{id}','showBlogPage')->name('user_blog_id');
    Route::get('event-post/{id}','showEventPages')->name('user_event_id');
    Route::get('iindex','showiindex')->name('usevent_id');

});

//General Routes  
Route::controller(UserController::class)->group(function(){
    Route::get('/dashboard/account-settings', 'accountSettings')->name('account_Settings');
    //Route::get('/admin/members', 'Members')->name('admin_show_members');
    //Route::get('/admin/admin-members', 'adminMembers')->name('admin_show_admin_members');

});
