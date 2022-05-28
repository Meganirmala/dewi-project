<?php

use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\FasilitasController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\KategoriController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\RoleController;
use App\Models\Gallery;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('products', ProductController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('fasilitas', FasilitasController::class);
    Route::get('/profileDesa', [ProfileController::class, 'profileDesa'])->name('profileDesa');
    Route::post('/profileDesa_store', [ProfileController::class, 'profileDesa_store'])->name('profileDesa_store');
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::post('/contact_store', [ContactController::class, 'contact_store'])->name('contact_store');
    Route::resource('article', ArticleController::class);

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
