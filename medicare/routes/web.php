<?php

use Illuminate\Foundation\Console\RouteCacheCommand;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercon;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/main', [usercon::class,'main']);

Route::get('/profile', [usercon::class,'profile']);

Route::get('/searchBar', [usercon::class,'searchBar']);

Route::get('/vendor', [usercon::class,'vendor']);
// Route::group(['middleware' =>"auth"],function(){
//     Route::group(['middleware' => 'role:customer','as' => 'customer.'],function())
// })