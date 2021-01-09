<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MDeleteController;

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
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout'])->name('user.logout');
Route::get('/user/home', [UserController::class, 'index'])->name('user.home');
Route::post('/login', [LoginController::class, 'verify']);
//User
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/create', [UserController::class, 'store']);
Route::get('/user/edit{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/edit{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/details{id}', [UserController::class, 'details'])->name('user.details');
Route::get('/user/delete{id}', [UserController::class, 'destroy'])->name('user.delete');
Route::get('/user/userlist', [UserController::class, 'userlist'])->name('user.list');
Route::get('/user/multiple/delete', [UserController::class, 'multiple'])->name('user.multiple');
Route::get('/user/search', [UserController::class, 'search'])->name('user.search')->name('user.search');
Route::get('admin/usersearch',[UserController::class,'usersearch'])->name('admin.usersearch');
/////
Route::get('user/multiple/delete', [UserController::class,'ulist']);
Route::post('user/multiple/delete', [UserController::class,'multipleusersdelete'])->name('user.mdelete');

Route::get('user/delete', [MDeleteController::class,'delete'])->name('mdelete');
Route::post('user/delete', [MDeleteController::class,'mdelete']);