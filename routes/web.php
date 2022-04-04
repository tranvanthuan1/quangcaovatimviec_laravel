<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\HomeController; # don't forgot to add this
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Baidangtuyen;
use App\Http\Controllers\Nguoitimviec;
use App\Http\Controllers\Nhatuyendung;


//Frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/default', [HomeController::class, 'default']);
Route::get('/chi-tiet-cong-viec{IdBaiDang}', [HomeController::class, 'show_details']);
Route::post('/tim-kiem', [HomeController::class, 'search']);
Route::post('/tim-kiem-theo-nganh', [HomeController::class, 'search_by_type']);

//Backend
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin-logout', [AdminController::class, 'logout_admin']);


//loin
Route::get('/authlogin', [LoginController::class, 'getAuthLogin']);
Route::post('/authlogin', [LoginController::class, 'postAuthLogin']);


Route::get('/authregister', [RegisterController::class, 'getAuthRegister']);
Route::post('/authregister', [RegisterController::class, 'postAuthRegister']);

Route::get('/login-ntd', [LoginController::class, 'getLogin_ntd']);
Route::post('/login-ntd', [LoginController::class, 'postLogin_ntd']);

Route::get('/register-ntd', [RegisterController::class, 'getRegister_ntd']);
Route::post('/register-ntd', [RegisterController::class, 'postRegister_ntd']);

Route::get('/logout', [LogoutController::class, 'getlogout']);

//Post
Route::get('/add-post', [PostController::class, 'add_post']);
Route::post('/save-post',[PostController::class, 'save_post']);
Route::get('/all-post', [PostController::class, 'all_post']);
Route::get('/delete-post/{IdBaiDang}', [PostController::class, 'delete_post']);
Route::get('/edit-post/{IdBaiDang}', [PostController::class, 'edit_post']);
Route::post('/update-post/{IdBaiDang}',[PostController::class, 'update_post']);
Route::get('/logout-ntd', [PostController::class, 'logout_ntd']);
Route::post('/ung-tuyen/{IdBaiDang}',[LoginController::class, 'recruitment']);
Route::get('/show_recruitment/{IdBaiDang}', [PostController::class, 'show_recruitment']);
 
Route::get('/duyetbaidang', [Baidangtuyen::class, 'duyetbai']);

Route::get('/pheduyet/{Id_BaiDang}', [Baidangtuyen::class, 'pheduyet']);



//Nguoi Tim viec
Route::get('/duyetnguoitimviec', [Nguoitimviec::class, 'duyetnguoitimviec']);
Route::get('/pheduyetnguoitimviec/{Id_TaiKhoan}', [Nguoitimviec::class, 'pheduyettk']);


//Nha Tuyen Dung
Route::get('/duyetnhatuyendung', [Nhatuyendung::class, 'duyetnhatuyendung']);
Route::get('/pheduyetnhatuyendung/{Id_TaiKhoan}', [Nhatuyendung::class, 'pheduyettk']);

