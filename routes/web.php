<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//SYnc Produk
Route::get('/sync_produk', [App\Http\Controllers\SyncProdukController::class, 'index'])->name('sync_produk');
Route::post('/start_sync_produk', [App\Http\Controllers\SyncProdukController::class, 'start_sync_produk'])->name('start_sync_produk');

//User
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/add_user', [App\Http\Controllers\UserController::class, 'create'])->name('add_user');
Route::post('/store_user', [App\Http\Controllers\UserController::class, 'store'])->name('store_user');
Route::get('/edit_user/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit_user');
Route::post('/update_user/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update_user');
Route::get('/destroy_user/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('destroy_user');

//Role
Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])->name('role');
Route::get('/add_role', [App\Http\Controllers\RoleController::class, 'create'])->name('add_role');
Route::post('/store_role', [App\Http\Controllers\RoleController::class, 'store'])->name('store_role');
Route::get('/edit_role/{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('edit_role');
Route::post('/update_role/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('update_role');
Route::post('/destroy_role/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('destroy_role');

// MENU SAMPLE

// Sample
Route::get('sample', [App\Http\Controllers\SampleController::class, 'index'])->name('sample');
Route::get('sample/create', [App\Http\Controllers\SampleController::class, 'store'])->name('sample.store');
Route::get('sample/edit/{id}', [App\Http\Controllers\SampleController::class, 'edit'])->name('sample.edit');
Route::get('sample/destroy', [App\Http\Controllers\SampleController::class, 'destroy'])->name('sample.destroy');

// Worksheet
Route::get('worksheet', [App\Http\Controllers\WorksheetController::class, 'index'])->name('worksheet');
Route::get('worksheet/create', [App\Http\Controllers\WorksheetController::class, 'store'])->name('worksheet.store');
Route::get('worksheet/edit/{id}', [App\Http\Controllers\WorksheetController::class, 'edit'])->name('worksheet.edit');
Route::get('worksheet/destroy', [App\Http\Controllers\WorksheetController::class, 'destroy'])->name('worksheet.destroy');

// Approval Sample
Route::get('appr_sample', [App\Http\Controllers\ApprovalSampleController::class, 'index'])->name('appr_sample');
Route::get('appr_sample/create', [App\Http\Controllers\ApprovalSampleController::class, 'store'])->name('appr_sample.store');
Route::get('appr_sample/edit/{id}', [App\Http\Controllers\ApprovalSampleController::class, 'edit'])->name('appr_sample.edit');
Route::get('appr_sample/destroy', [App\Http\Controllers\ApprovalSampleController::class, 'destroy'])->name('appr_sample.destroy');

// Approval Sample HPP
Route::get('appr_sample_hpp', [App\Http\Controllers\ApprovalSampleHPPController::class, 'index'])->name('appr_sample_hpp');
Route::get('appr_sample_hpp/create', [App\Http\Controllers\ApprovalSampleHPPController::class, 'store'])->name('appr_sample_hpp.store');
Route::get('appr_sample_hpp/edit/{id}', [App\Http\Controllers\ApprovalSampleHPPController::class, 'edit'])->name('appr_sample_hpp.edit');
Route::get('appr_sample_hpp/destroy', [App\Http\Controllers\ApprovalSampleHPPController::class, 'destroy'])->name('appr_sample_hpp.destroy');

// Permintaan Material Sample
Route::get('permintaanmaterialsample', [App\Http\Controllers\PermintaanMaterialSampleController::class, 'index'])->name('permintaanmaterialsample');
Route::get('permintaanmaterialsample/create', [App\Http\Controllers\PermintaanMaterialSampleController::class, 'store'])->name('permintaanmaterialsample.store');
Route::get('permintaanmaterialsample/print', [App\Http\Controllers\PermintaanMaterialSampleController::class, 'print'])->name('permintaanmaterialsample.print');
Route::get('permintaanmaterialsample/edit/{id}', [App\Http\Controllers\PermintaanMaterialSampleController::class, 'edit'])->name('permintaanmaterialsample.edit');
Route::get('permintaanmaterialsample/destroy', [App\Http\Controllers\PermintaanMaterialSampleController::class, 'destroy'])->name('permintaanmaterialsample.destroy');


// MENU DESAIN

// Master Desain
Route::get('m_designer', [App\Http\Controllers\DesainerController::class, 'index'])->name('m_designer');
Route::get('create_designer', [App\Http\Controllers\DesainerController::class, 'create'])->name('create_designer');
Route::post('store_designer', [App\Http\Controllers\DesainerController::class, 'store'])->name('store_designer');
Route::get('edit_designer/{id}', [App\Http\Controllers\DesainerController::class, 'edit'])->name('edit_designer');
Route::post('update_designer/{id}', [App\Http\Controllers\DesainerController::class, 'update'])->name('update_designer');
Route::get('destroy_designer/{id}', [App\Http\Controllers\DesainerController::class, 'destroy'])->name('destroy_designer');

// Desain
Route::get('desain', [App\Http\Controllers\DesainController::class, 'index'])->name('desain');
Route::get('desain/create', [App\Http\Controllers\DesainController::class, 'store'])->name('desain.store');
Route::get('desain/download', [App\Http\Controllers\DesainController::class, 'download'])->name('desain.download');
Route::get('desain/edit/{id}', [App\Http\Controllers\DesainController::class, 'edit'])->name('desain.edit');
Route::get('desain/destroy', [App\Http\Controllers\DesainController::class, 'destroy'])->name('desain.destroy');

// Form Intruksi Design
Route::get('f-intruksidesign', [App\Http\Controllers\FormIntruksiDesignController::class, 'index'])->name('f-intruksidesign');
Route::get('f-intruksidesign/create', [App\Http\Controllers\FormIntruksiDesignController::class, 'store'])->name('f-intruksidesign.store');
Route::get('f-intruksidesign/print', [App\Http\Controllers\FormIntruksiDesignController::class, 'print'])->name('f-intruksidesign.print');
Route::get('f-intruksidesign/edit/{id}', [App\Http\Controllers\FormIntruksiDesignController::class, 'edit'])->name('f-intruksidesign.edit');
Route::get('f-intruksidesign/destroy', [App\Http\Controllers\FormIntruksiDesignController::class, 'destroy'])->name('f-intruksidesign.destroy');

// Form Intruksi Design
Route::get('f-intruksippic', [App\Http\Controllers\FormIntruksippicController::class, 'index'])->name('f-intruksippic');
Route::get('f-intruksippic/create', [App\Http\Controllers\FormIntruksippicController::class, 'store'])->name('f-intruksippic.store');
Route::get('f-intruksippic/print', [App\Http\Controllers\FormIntruksippicController::class, 'print'])->name('f-intruksippic.print');
Route::get('f-intruksippic/edit/{id}', [App\Http\Controllers\FormIntruksippicController::class, 'edit'])->name('f-intruksippic.edit');
Route::get('f-intruksippic/destroy', [App\Http\Controllers\FormIntruksippicController::class, 'destroy'])->name('f-intruksippic.destroy');

// Nama Desain
Route::get('namadesign', [App\Http\Controllers\NamaDesainController::class, 'index'])->name('namadesign');
Route::get('create_namadesign', [App\Http\Controllers\NamaDesainController::class, 'create'])->name('create_namadesign');
Route::post('store_namadesign', [App\Http\Controllers\NamaDesainController::class, 'store'])->name('store_namadesign');
Route::get('edit_namadesign/{id}', [App\Http\Controllers\NamaDesainController::class, 'edit'])->name('edit_namadesign');
Route::post('update_namadesign/{id}', [App\Http\Controllers\NamaDesainController::class, 'update'])->name('update_namadesign');
Route::get('destroy_namadesign/{id}', [App\Http\Controllers\NamaDesainController::class, 'destroy'])->name('destroy_namadesign');

// Approval Desain
Route::get('appr_desain', [App\Http\Controllers\ApprovalDesainController::class, 'index'])->name('appr_desain');
Route::get('appr_desain/create', [App\Http\Controllers\ApprovalDesainController::class, 'store'])->name('appr_desain.store');
Route::get('appr_desain/print', [App\Http\Controllers\ApprovalDesainController::class, 'print'])->name('appr_desain.print');
Route::get('appr_desain/edit/{id}', [App\Http\Controllers\ApprovalDesainController::class, 'edit'])->name('appr_desain.edit');
Route::get('appr_desain/destroy', [App\Http\Controllers\ApprovalDesainController::class, 'destroy'])->name('appr_desain.destroy');


// Menu Merchandise

// PO Produksi
Route::get('poproduksi', [App\Http\Controllers\POProduksiController::class, 'index'])->name('poproduksi');
Route::get('poproduksi/create', [App\Http\Controllers\POProduksiController::class, 'store'])->name('poproduksi.store');
Route::get('poproduksi/print', [App\Http\Controllers\POProduksiController::class, 'print'])->name('poproduksi.print');
Route::get('poproduksi/edit/{id}', [App\Http\Controllers\POProduksiController::class, 'edit'])->name('poproduksi.edit');
Route::get('poproduksi/destroy', [App\Http\Controllers\POProduksiController::class, 'destroy'])->name('poproduksi.destroy');

// Jadwal Produksi
Route::get('jadwalproduksi', [App\Http\Controllers\JadwalProduksiController::class, 'index'])->name('jadwalproduksi');
Route::get('jadwalproduksi/create', [App\Http\Controllers\JadwalProduksiController::class, 'store'])->name('jadwalproduksi.store');
Route::get('jadwalproduksi/print', [App\Http\Controllers\JadwalProduksiController::class, 'print'])->name('jadwalproduksi.print');
Route::get('jadwalproduksi/edit/{id}', [App\Http\Controllers\JadwalProduksiController::class, 'edit'])->name('jadwalproduksi.edit');
Route::get('jadwalproduksi/destroy', [App\Http\Controllers\JadwalProduksiController::class, 'destroy'])->name('jadwalproduksi.destroy');