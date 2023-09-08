<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'homepage'])->name('homepage')->middleware('guest');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/out', [App\Http\Controllers\HomeController::class, 'out'])->name('out');

Route::get('/post', [App\Http\Controllers\PostController::class, 'post'])->name('post');
Route::get('/add_post', [App\Http\Controllers\PostController::class, 'add_post'])->name('add_post');
Route::POST('/add_post_post', [App\Http\Controllers\PostController::class, 'add_post_post'])->name('add_post_post');
Route::get('/post/{slug}', [App\Http\Controllers\PostController::class, 'view'])->name('view');
Route::get('/edit_post/{id}', [App\Http\Controllers\PostController::class, 'edit_post'])->name('edit_post');
Route::post('/edit_post_post/{id}', [App\Http\Controllers\PostController::class, 'edit_post_post'])->name('edit_post_post');
Route::get('/delete_post/{id}', [App\Http\Controllers\PostController::class, 'delete_post'])->name('delete_post');
Route::get('/category/{slug}', [App\Http\Controllers\PostController::class, 'categoryslug'])->name('categoryslug');
Route::get('/page/{slug}', [App\Http\Controllers\PostController::class, 'pageslug'])->name('pageslug');
Route::post('/pupload', [App\Http\Controllers\PostController::class, 'pupload'])->name('pupload');

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'category'])->name('category');
Route::get('/add_category', [App\Http\Controllers\CategoryController::class, 'add_category'])->name('add_category');
Route::post('/add_category_post', [App\Http\Controllers\CategoryController::class, 'add_category_post'])->name('add_category_post');
Route::get('/edit_category/{id}', [App\Http\Controllers\CategoryController::class, 'edit_category'])->name('edit_category');
Route::post('/edit_category_post/{id}', [App\Http\Controllers\CategoryController::class, 'edit_category_post'])->name('edit_category_post');
Route::get('/delete_category/{id}', [App\Http\Controllers\CategoryController::class, 'delete_category'])->name('delete_category');

Route::get('/page', [App\Http\Controllers\PageController::class, 'page'])->name('page');
Route::get('/add_page', [App\Http\Controllers\PageController::class, 'add_page'])->name('add_page');
Route::post('/add_page_post', [App\Http\Controllers\PageController::class, 'add_page_post'])->name('add_page_post');
Route::get('/edit_page/{id}', [App\Http\Controllers\PageController::class, 'edit_page'])->name('edit_page');
Route::post('/edit_page_post/{id}', [App\Http\Controllers\PageController::class, 'edit_page_post'])->name('edit_page_post');
Route::get('/delete_page/{id}', [App\Http\Controllers\PageController::class, 'delete_page'])->name('delete_page');

Route::get('/setting', [App\Http\Controllers\SettingController::class, 'setting'])->name('setting');
Route::post('/setting_post/{id}', [App\Http\Controllers\SettingController::class, 'setting_post'])->name('setting_post');

Route::get('/ads', [App\Http\Controllers\AdController::class, 'ads'])->name('ads');
Route::post('/ads_post/{id}', [App\Http\Controllers\AdController::class, 'ads_post'])->name('ads_post');

Route::get('/author', [App\Http\Controllers\AuthorController::class, 'author'])->name('author');
Route::post('/author_post/{id}', [App\Http\Controllers\AuthorController::class, 'author_post'])->name('author_post');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});


Route::get('/clear', function() {

Artisan::call('cache:clear');
Artisan::call('config:cache');
Artisan::call('view:clear');
return "Cleared!";
});


Route::get('reset', function (){
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});