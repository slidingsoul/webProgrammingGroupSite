<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('profile/{username}',[MainController::class, 'ProfilePage']);

Route::get('/home', [MainController::class, 'HomePage']);

Route::get('/registration', [LoginController::class, 'registration']);

Route::group(['middleware'=>'auth', 'prefix' => 'settings'], function(){
    Route::get('/profile', function(){
        echo "Opened profile setting";
    });

    Route::get('/integration', function(){
        echo "Opened integration setting";
    });
});

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);