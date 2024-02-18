<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookCategoryController;

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

// ADMIN DASHBOARD

Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admin'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('buku', BookController::class);
    Route::resource('kategori', BookCategoryController::class);
    Route::get('/export-buku', [BookController::class, 'export_excel'])->name('export');
});


// USER DASHBOARD
// Route::group(['middleware' => ['auth']], function(){
   Route::get('/', function(){
    return view('index');
   })->name('home');
// });

Route::group(['prefix' => 'katalog'], function(){
   Route::get('/', function(){
    return view('pages.katalog');
   });
   Route::group(['prefix' => 'bookid'], function(){
    Route::get('/{id}', [KatalogController::class, 'index'])->name('bookdetails');
   });
});
Auth::routes();
Route::get('logout', [LoginController::class, 'logout']);


// Google
Route::prefix('google')->name('google.')->group( function()
{
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});
