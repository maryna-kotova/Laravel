<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
Route::get('/', [MainController::class, 'index']);
Route::get('/contacts', [MainController::class, 'contacts']);
Route::post('/contacts', [MainController::class, 'getContacts']);


