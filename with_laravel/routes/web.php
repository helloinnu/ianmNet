<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/profil', [HomeController::class, 'indexProfil']);

Route::get('/perusahaan', [HomeController::class, 'indexPerusahaan']);

Route::get('/layanan', [HomeController::class, 'indexLayanan']);

Route::get('/tim', [HomeController::class, 'indexTim']);

Route::get('/qna', [HomeController::class, 'indexQnA']);

Route::get('/dashboard', [AdminController::class, 'AdminHome'])->middleware(['auth'])->name('dashboard');

Route::get('/admin-user', [AdminController::class, 'AdminUserList'])->middleware(['auth']);

Route::get('/admin-admin', [AdminController::class, 'AdminList'])->middleware(['auth']);

Route::get('/admin-layanan', [AdminController::class, 'AdminLayanan'])->middleware(['auth']);

Route::get('/admin-pesanan', [AdminController::class, 'AdminPesanan'])->middleware(['auth']);

Route::get('/admin-qna', [AdminController::class, 'AdminQna'])->middleware(['auth']);

Route::get('/admin-edit-admin', [AdminController::class, 'AdminEditAdmin'])->middleware(['auth']);

Route::get('/admin-edit-user', [AdminController::class, 'AdminEditUser'])->middleware(['auth']);

Route::get('/admin-edit-layanan', [AdminController::class, 'AdminEditLayanan'])->middleware(['auth']);

Route::get('/admin-edit-pesanan', [AdminController::class, 'AdminEditPesanan'])->middleware(['auth']);

Route::get('/admin-edit-qna', [AdminController::class, 'AdminEditQna'])->middleware(['auth']);

Route::get('/admin-tambah-user', [AdminController::class, 'AdminAddUser'])->middleware(['auth']);

Route::get('/admin-tambah-admin', [AdminController::class, 'AdminAddAdmin'])->middleware(['auth']);

Route::get('/admin-tambah-layanan', [AdminController::class, 'AdminAddLayanan'])->middleware(['auth']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
