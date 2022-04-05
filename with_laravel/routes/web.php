<?php

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
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/perusahaan', function () {
    return view('perusahaan');
});
Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/qna', function () {
    return view('qna');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin/home');
});

Route::get('/admin-user', function () {
    return view('admin/userlist');
});

Route::get('/admin-admin', function () {
    return view('admin/adminlist');
});

Route::get('/admin-layanan', function () {
    return view('admin/layanan');
});

Route::get('/admin-pesanan', function () {
    return view('admin/pesanan');
});

Route::get('/admin-qna', function () {
    return view('admin/qna');
});

Route::get('/admin-edit-user', function () {
    return view('admin/edituser');
});

Route::get('/admin-edit-admin', function () {
    return view('admin/editadmin');
});

Route::get('/admin-edit-layanan', function () {
    return view('admin/editlayanan');
});

Route::get('/admin-edit-pesanan', function () {
    return view('admin/editpesanan');
});

Route::get('/admin-edit-qna', function () {
    return view('admin/editqna');
});

Route::get('/test', function () {
    return view('test');
});


