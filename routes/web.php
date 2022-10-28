<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreImageController;

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
Route::get('/product', [App\Http\Controllers\Admin\DashboardController::class, 'product']);
Route::get('/StoreManagement', [App\Http\Controllers\Admin\DashboardController::class, 'StoreManagement']);
Route::get('/ManagePage', [App\Http\Controllers\Admin\DashboardController::class, 'ManagePage']); 
Route::get('/reports', [App\Http\Controllers\Admin\DashboardController::class, 'reports']);
 
//route for Store image (Robinson, Sm, SNR) 
Route::get('/add-image', [StoreImageController::class, 'create'])->name('image.add');
Route::post('/store-image', [StoreImageController::class, 'store'])->name('image.store');
Route::get('/StoreManagement', [StoreImageController::class, 'show'])->name('image.show');




Route::resource('products', 'App\Http\Controllers\ProductController');

