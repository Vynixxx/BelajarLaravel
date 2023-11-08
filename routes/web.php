<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Navbar;
use App\Http\Controllers\InputData;

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
    return view('home');
});

Route::get('/auth/login',[LoginRegisterController::class, 'login'])->name('auth.login');
Route::get('/auth/register',[LoginRegisterController::class, 'register'])->name('auth.register');

Route::get('/user/home',[LoginRegisterController::class, 'userHome'])->name('user.home');
Route::get('/admin/home',[LoginRegisterController::class, 'adminHome'])->name('admin.home');

Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');

Route::middleware(['guest'])->group(function () {
    Route::get('/', function() {
        return view('home');
    });
    Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
    Route::get('/inputnews', [InputData::class, 'news'])->name('input.news');
    Route::get('/inputlecturer', [InputData::class, 'lecturer'])->name('input.lecturer');
    Route::get('/admin/tambah', [AdminController::class, 'tambah'])->name('admin.tambah');
    Route::get('/editAdmin/{id}', [AdminController::class, 'editAdmin'])->name('editAdmin');
    Route::get('/deleteAdmin/{id}', [AdminController::class, 'deleteAdmin'])->name('deleteAdmin');
    Route::get('/admin/buku', [AdminController::class, 'adminBuku'])->name('admin.buku');
    Route::get('/admin/tambahBuku', [AdminController::class, 'tambahBuku'])->name('admin.tambahBuku');
    Route::get('/admin/editBuku/{id}', [AdminController::class, 'editBuku'])->name('admin.editBuku');
    Route::get('/admin/deleteBuku/{id}', [AdminController::class, 'deleteBuku'])->name('admin.deleteBuku');
    Route::get('/admin/peminjaman', [AdminController::class, 'adminPinjam'])->name('admin.pinjam');
    Route::get('/admin/tambahpinjam', [AdminController::class, 'tambahPinjam'])->name('admin.tambahPinjam');
    Route::get('/admin/editPinjam/{id}', [AdminController::class, 'editPinjam'])->name('admin.editPinjam');
    Route::get('/admin/deletePinjam/{id}', [AdminController::class, 'deletePinjam'])->name('admin.deletePinjam');
    Route::get('/admin/detail_peminjaman/{id_peminjaman}/{id_user}/{id_buku}', [AdminController::class, 'detailPeminjaman'])->name('admin.detailPeminjaman');
});

Route::post('/postTambahBuku', [AdminController::class, 'postTambahBuku'])->name('postTambahBuku');
Route::post('/postEditBuku/{id}', [AdminController::class, 'postEditBuku'])->name('postEditBuku');
Route::post('/postTambahPinjam', [AdminController::class, 'postTambahPinjam'])->name('postTambahPinjam');
Route::post('/postEditPinjam/{id}', [AdminController::class, 'postEditPinjam'])->name('postEditPinjam');
Route::post('/tambahAdmin', [AdminController::class, 'postTambahAdmin'])->name('postTambahAdmin');
Route::post('/postEditAdmin/{id}', [AdminController::class, 'postEditAdmin'])->name('postEditAdmin');

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
    Route::get('/news', [Navbar::class, 'news'])->name('news');
    Route::get('/profileksi', [Navbar::class, 'profileksi'])->name('profileksi');
    Route::get('/lecturerksi', [Navbar::class, 'lecturerksi'])->name('lecturerksi');
});

/*Route::group(['middleware' => ['user', 'NewsProfile:user']], function () {
    Route::get('/user/home/news', [LoginRegisterController::class, 'userHome'])->name('user.home');
});*/

/*Route::get('/inputnews',[InputData::class, 'news'])->name('input.news');
Route::get('/inputlecturer',[InputData::class, 'lecturer'])->name('input.lecturer');*/


