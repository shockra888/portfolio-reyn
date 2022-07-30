<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FileManagerController;

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
    return view('intro');
});
Route::get('/role',function(){
    return view('role');
});
Route::get('/username',function(){
    return view('username');
});
Route::get('/login',function(){
    return view('login');
});

Route::get('/admin',function(){
    return view('Admin/index');
});

Route::get('/admin', [EventController::class, 'index'])->name('index');
Route::post('admin/create-event', [EventController::class, 'create'])->name('calendar.create');
Route::patch('admin/edit-event', [EventController::class, 'edit'])->name('calendar.edit');
Route::delete('admin/remove-event', [EventController::class, 'destroy'])->name('calendar.destroy');

Route::get('/admin', [FileManagerController::class, 'index']);
