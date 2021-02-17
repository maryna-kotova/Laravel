<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;


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
// Route::get('/', 'MainController@index'); - laravel before 8 version
Route::get( '/',                [MainController::class,   'index']);
Route::get( '/contacts',        [MainController::class,   'contacts'])->middleware('auth');
Route::post('/contacts',        [MainController::class,   'getContacts']);
Route::get( '/sale',            [StoreController::class,  'sale']);
Route::get( '/reviews',         [ReviewController::class, 'reviews'])->name('review');
Route::post('/reviews',         [ReviewController::class, 'saveReview']);
Route::get( '/news',            [NewsController::class,   'news']);
Route::post('/cart/add',        [CartController::class,   'add']);

Route::get( '/category/{slug}',         [StoreController::class,  'category']);
Route::get( '/product/{product:slug}',  [StoreController::class,  'product']);




Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function(){
   Route::get('/',  [AdminController::class,  'index']);  

   Route::resource('/category', CategoryController::class); 
   Route::resource('/product',  ProductController::class); 
   Route::resource('/slider',   SliderController::class);
   
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
   \UniSharp\LaravelFilemanager\Lfm::routes();
});

Auth::routes();

