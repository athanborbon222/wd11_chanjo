<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreImageController;
use App\Http\Controllers\UserProductsController;
use App\Http\Controllers\Admin\UserController;

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
   
Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function(){
      Route::get('/users', 'index');
      Route::get('/users/create', 'create');
      Route::post('/users', 'store');
      Route::get('/users/{user_id}/edit', 'edit');
      Route::put('users/{user_id}', 'update');
      Route::get('/users/{user_id}/delete', 'destroy');

});
   
});



Route::middleware(['auth'])->group(function(){

Route::get('profile', [App\Http\Controllers\Frontend\UserProfileController::class, 'index']);
Route::post('profile', [App\Http\Controllers\Frontend\UserProfileController::class, 'updateUserDetails']);
});







//navbar
Route::get('/cart', [App\Http\Controllers\PagesController::class, 'cart']);
Route::get('/contactus', [App\Http\Controllers\PagesController::class, 'contactus']);
// Route::get('/products', [App\Http\Controllers\PagesController::class, 'products']);
Route::get('/checkout', [App\Http\Controllers\PagesController::class, 'checkout']);














//sidebar
Route::get('/product', [App\Http\Controllers\Admin\DashboardController::class, 'product']);
Route::get('/StoreManagement', [App\Http\Controllers\Admin\DashboardController::class, 'StoreManagement']);
Route::get('/ManagePage', [App\Http\Controllers\Admin\DashboardController::class, 'ManagePage']); 
Route::get('/reports', [App\Http\Controllers\Admin\DashboardController::class, 'reports']);

//footer
Route::get('/aboutus', [App\Http\Controllers\PagesController::class, 'aboutus']);
Route::get('/faqs', [App\Http\Controllers\PagesController::class, 'faqs']);
Route::get('/products', [App\Http\Controllers\PagesController::class, 'products']);
Route::get('/termsconditions', [App\Http\Controllers\PagesController::class, 'termsconditions']);
Route::get('/privacypolicy', [App\Http\Controllers\PagesController::class, 'privacypolicy']);

//route for Store imagproductsobinson, Sm, SNR) 
Route::get('/add-image', [StoreImageController::class, 'create'])->name('image.add');
Route::post('/store-image', [StoreImageController::class, 'store'])->name('image.store');
Route::get('/StoreManagement', [StoreImageController::class, 'show'])->name('image.show');




Route::resource('products', 'App\Http\Controllers\ProductController');


Route::get('/userproducts/index', [UserProductsController::class, 'index'])->name('userproducts.index');
