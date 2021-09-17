<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PrivicyController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TermsConditionController;

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

Route::fallback([BasicController::class, 'error']);

Route::get('/', [BasicController::class, 'landing']);
Route::get('contact', [BasicController::class, 'contactpage']);
Route::get('about', [BasicController::class, 'aboutpage']);
Route::get('blog', [BasicController::class, 'blogpage']);
Route::get('/gallery', [BasicController::class, 'gallery']);
Route::get('/terms-condition', [BasicController::class, 'termscondition']);
Route::get('/privacy-policy', [BasicController::class, 'privacypolicy']);
Route::get('/all-course', [BasicController::class, 'viewcourse']);
Route::post('check_user', [UserController::class, 'login'])->name('user.login')->middleware('guest');


Route::get('login', [BasicController::class, 'loginpage'])->middleware('guest');

Route::get('/courses/{slug}', [PageController::class, 'viewpage'])->name('coursesub');
Route::get('/countries/{slug}', [PageController::class, 'viewpage'])->name('countrysub');
Route::get('/about/{slug}', [PageController::class, 'viewpage'])->name('aboutsub');
Route::get('/index/{slug}', [PageController::class, 'viewpage'])->name('indexsub');

Route::get('blog-view/{slug}', [BlogController::class, 'blogview'])->name('blogs.view');
Route::post('blogs/comment', [BlogController::class, 'addcomment'])->name('blog.comment');

Route::post('contact/sumbit', [AjaxController::class, 'contactsumbit'])->name('contact.sumbit');


Route::post('sitesetting/update', [SiteController::class, 'update'])->name('site-setting.update');

Route::middleware(['admin'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard']);
    Route::resource('teams', TeamController::class);
    Route::resource('users', UserController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('pages', PageController::class);
    Route::resource('mainmenu', MenuController::class);
    Route::resource('layout', LayoutController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('contactpage', ContactController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('site-setting', SiteController::class);
    Route::resource('privacypolicy', PrivicyController::class);
    Route::resource('termscondition', TermsConditionController::class);
    Route::post('blog/image/upload', [ImageController::class, 'upload'])->name('image.upload');
    Route::get('signout', [UserController::class, 'signout'])->name('users.signout');
    
    Route::post('/layout/updatelayout',[LayoutController::class, 'updateLayout']);
    Route::post('/layout/addblock',[LayoutController::class, 'addBlock']);
    Route::post('/layout/deleteblock',[LayoutController::class, 'deleteBlock']);
    Route::post('/updateheader',[HomeController::class, 'updateHeader']);
    Route::post('/updateabout',[AboutController::class, 'updateAbout']);
    Route::post('/updatefacts',[LayoutController::class, 'updateFacts'])->name('fact.update');
    Route::get('/layout/text/{page}/{id}',[LayoutController::class, 'editText']);
    Route::get('/layout/fact/{page}',[LayoutController::class, 'editFact']);
    Route::post('/updatetext',[LayoutController::class, 'updateText'])->name('text.update');
    ROute::post('/mainmenu/updatelayout', [MenuController::class, 'updatePosition']);
});