<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\RestoranController;

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


Route::view('restoran', 'restoran');
Route::get('restoran/{lang}', function ($lang) {
    App::setlocale($lang);
    session()->put('lang', $lang);
    return redirect()->back();
});

Route::resource('restoran', RestoranController::class);
Route::resource('/', RestoranController::class);
