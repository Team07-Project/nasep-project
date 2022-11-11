<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PuskesmasController;
use App\Http\Controllers\PuskesmasDetailController;
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
// Super Admin
Route::resource('/admin/puskesmas', PuskesmasController::class);
// Admin
Route::get('/admin', [AdminController::class,'index']);
Route::get('/admin/detail',[PuskesmasDetailController::class,'index']);
Route::put('/admin/detail/{detail:id}/update',[PuskesmasDetailController::class,'update']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
