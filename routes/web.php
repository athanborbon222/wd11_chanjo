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

// Route::get('/', function () {
//     return view('welcome');
// });


 Route::get('/', 'App\Http\Controllers\PagesController@index');


 Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route  for admin middleware
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
   Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
});
 
//route for Store image (Robinson, Sm, SNR) 
Route::get('/add-image', [StoreImageController::class, 'create'])->name('image.add');
Route::get('/store-image', [StoreImageController::class, 'create'])->name('image.store');
Route::get('/show-image', [StoreImageController::class, 'create'])->name('image.show');
Route::get('/delete-image', [StoreImageController::class, 'create'])->name('image.delete');