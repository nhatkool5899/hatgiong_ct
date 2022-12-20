<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\TintucController;
use App\Http\Controllers\KythuatController;
use App\Http\Controllers\CuahangController;
use App\Http\Controllers\LienheController;
use App\Http\Controllers\DailyController;
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
//Route của trang Client
Route::get('/', [HomeController::class, 'index']);
Route::get('/trangchu', [HomeController::class, 'trangchu']);
Route::get('/gioithieu', [HomeController::class, 'gioithieu']);
Route::get('/hethongcuahang', [CuahangController::class, 'hethongcuahang']);
Route::get('/lienhe', [LienheController::class, 'lienhe']);
Route::get('/kythuatnuoitrong', [KythuatController::class, 'kythuat']);
Route::get('/kythuatnuoitrong/{id_kythuat}', [KythuatController::class, 'xemkythuat']);

Route::get('/tintuc', [TintucController::class, 'tintuc']);
Route::get('/tintuc/{id_tintuc}', [TintucController::class, 'xemtintuc']);
Route::get('/chitietsanpham/{id_sanpham}', [App\Http\Controllers\SanphamController::class, 'chitietsanpham']);
Route::get('/loaisanpham/datsachphansach', [SanphamController::class, 'datsachphansach']);
Route::get('/loaisanpham/hatgiong', [SanphamController::class, 'hatgiong']);
Route::get('/loaisanpham/hatgiongcayantrai', [SanphamController::class, 'hatgiongcayantrai']);
Route::get('/loaisanpham/hatgiongrau', [SanphamController::class, 'hatgiongrau']);
Route::get('/loaisanpham/hatgiongraumam', [SanphamController::class, 'hatgiongraumam']);
Route::get('/loaisanpham/hatgiongcacloaicu', [SanphamController::class, 'hatgiongcacloaicu']);
Route::get('/loaisanpham/hatgiongcacloaihoa', [SanphamController::class, 'hatgiongcacloaihoa']);
Route::get('/loaisanpham/chau', [SanphamController::class, 'chau']);

Route::get('/timkiem', [HomeController::class, 'timkiem']);
Route::get('/lienhe', [App\Http\Controllers\LienheController::class, 'create']);
Route::post('/lienhe', [App\Http\Controllers\LienheController::class, 'store']);
Route::get('/daily', [App\Http\Controllers\DailyController::class, 'createdaily']);
Route::post('/daily', [App\Http\Controllers\DailyController::class, 'storedaily']);
Route::get('/xemkythuat/{id_kythuat}', [App\Http\Controllers\KythuatController::class, 'xemkythuat']);

// Route của Login
Route::get('/dangnhap', [LoginController::class, 'getdangnhap',])->name('login')->middleware('guest');
Route::post('/dangnhap',[LoginController::class, 'postdangnhap']);
//Route của trang Admin
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dangxuat',[LoginController::class, 'dangxuat']);
    Route::get('/nguoidung/suanguoidung/{id_nguoidung}', [App\Http\Controllers\LoginController::class, 'editnguoidung']);
    Route::post('/nguoidung/suanguoidung/{id_nguoidung}', [App\Http\Controllers\LoginController::class, 'updatenguoidung']);
    Route::get('/quanly', [AdminController::class, 'quanly']);
    Route::get('/quanly/daily', [DailyController::class, 'quanlydaily']);
    Route::get('/quanly/dangkydaily/xoadaily/{id_daily}', [App\Http\Controllers\DailyController::class, 'xoadaily']);
    Route::get('/quanly/lienhe', [LienheController::class, 'quanlylienhe']);
    Route::get('/quanly/lienhe/xoalienhe/{id_lienhe}', [App\Http\Controllers\LienheController::class, 'xoalienhe']);
    Route::get('/quanly/sanpham', [SanphamController::class, 'sanpham']);
    Route::get('/quanly/sanpham/themsanpham', [App\Http\Controllers\SanphamController::class, 'create']);
    Route::post('/quanly/sanpham/themsanpham', [App\Http\Controllers\SanphamController::class, 'store']);
    Route::get('/quanly/sanpham/suasanpham/{id_sanpham}', [App\Http\Controllers\SanphamController::class, 'edit']);
    Route::post('/quanly/sanpham/suasanpham/{id_sanpham}', [App\Http\Controllers\SanphamController::class, 'update']);
    Route::get('/quanly/sanpham/xoasanpham/{id_sanpham}', [App\Http\Controllers\SanphamController::class, 'delete']);
    Route::get('/quanly/tintuc', [TintucController::class, 'quanlytintuc']);
    Route::get('/quanly/tintuc/themtintuc', [App\Http\Controllers\TintucController::class, 'create']);
    Route::post('/quanly/tintuc/themtintuc', [App\Http\Controllers\TintucController::class, 'store']);
    Route::get('/quanly/tintuc/suatintuc/{id_tintuc}', [App\Http\Controllers\TintucController::class, 'edit']);
    Route::post('/quanly/tintuc/suatintuc/{id_tintuc}', [App\Http\Controllers\TintucController::class, 'update']);
    Route::get('/quanly/tintuc/xoatintuc/{id_tintuc}', [App\Http\Controllers\TintucController::class, 'delete']);
    Route::get('/quanly/kythuat', [KythuatController::class, 'quanlykythuat']);
    Route::get('/quanly/kythuat/themkythuat', [App\Http\Controllers\KythuatController::class, 'create']);
    Route::post('/quanly/kythuat/themkythuat', [App\Http\Controllers\KythuatController::class, 'store']);
    Route::get('/quanly/kythuat/suakythuat/{id_kythuat}', [App\Http\Controllers\KythuatController::class, 'edit']);
    Route::post('/quanly/kythuat/suakythuat/{id_kythuat}', [App\Http\Controllers\KythuatController::class, 'update']);
    Route::get('/quanly/kythuat/xoakythuat/{id_kythuat}', [App\Http\Controllers\KythuatController::class, 'delete']);


    Route::get('/quanly/sanpham/hatgiong',[SanphamController::class, 'ql_hatgiong']);
    Route::get('/quanly/sanpham/datsach',[SanphamController::class, 'ql_datsach']);
    Route::get('/quanly/sanpham/chau',[SanphamController::class, 'ql_chau']);
});
