<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Layout;

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
//     return view('admin.tambah_gallery');
// });
Route::get('/', [Layout::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('register');

route::controller(layout::class)->group(function(){
    //  route::get('/admin/udahlogin','udahlogin')->name('udahlogin');
    //  route::get('/admin/tambah_gallery','tambah_gallery')->name('tambah_gallery');
    //   route::get('/admin/tabelgallery','tabelgallery')->name('tabelgallery');
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function (){
    route::get('/sudahlogin',[layout::class,'sudahlogin'])->name('sudahlogin');
    route::get('/tambah_gallery',[layout::class,'tambah_gallery'])->name('tambah_gallery');
    route::get('/tabelgallery',[layout::class,'tabelgallery'])->name('tabelgallery');
});


route::post('/tambah_gallery',[GalleryController::class,"store"])->name('simpanGallery');
route::get('/edit_gallery/{id}',[GalleryController::class,'edit'])->name('edit');
route::get('/hapus-gallery/{id}',[GalleryController::class,"destroy"])->name('hapus-gallery');
route::post('/editgallery/{id}',[GalleryController::class,"update"])->name('update');
