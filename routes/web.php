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



Route::get('restoran/{lang}', function ($lang) {
    App::setlocale($lang);
    session()->put('lang', $lang);
    return redirect()->back();
});
Route::get("admin/slayd_en_edit/{id}",[RestoranController::class,"slayd_en_edit"]);
Route::get("admin/slayd_uz_edit/{id}",[RestoranController::class,"slayd_uz_edit"]);
Route::get("admin/slayd_en_dell/{id}",[RestoranController::class,"slayd_en_dell"]);
Route::get("admin/slayd_uz_dell/{id}",[RestoranController::class,"slayd_uz_dell"]);
Route::post("admin/slayd_en_story",[RestoranController::class, "slayd_en_story"]);
Route::post("admin/slayd_uz_story",[RestoranController::class, "slayd_uz_story"]);
Route::get("admin/slayd_add_en",[RestoranController::class, "slayd_en_add"]);
Route::get("admin/slayd_add_uz",[RestoranController::class, "slayd_uz_add"]);
Route::get("/admin/slayd_en",[RestoranController::class,"slayd_en"]);
Route::get("/admin/slayd",[RestoranController::class,"slayd_uz"]);
Route::get("/admin/mijoz_status/{id}",[RestoranController::class,"mijoz_status"]);
Route::get("/admin/mijoz_en_status/{id}",[RestoranController::class,"mijoz_en_status"]);
Route::get("/admin/mijoz_en_show/{id}",[RestoranController::class,"mijoz_en_show"]);
Route::get("/admin/mijoz_show/{id}",[RestoranController::class,"mijoz_show"]);
Route::get("/admin/mijoz_en",[RestoranController::class,"mijoz_en"]);
Route::get("/admin/mijoz",[RestoranController::class,"mijoz"]);
Route::put("/admin/chef_uz_update/{id}",[RestoranController::class,"chefs_uz_update"]);
Route::put("/admin/chef_en_update/{id}",[RestoranController::class,"chefs_en_update"]);
Route::get("/admin/chefs_uz_edit/{id}",[RestoranController::class,"chef_uz_edit"]);
Route::get("/admin/chefs_en_edit/{id}",[RestoranController::class,"chef_en_edit"]);
Route::get("/admin/chef_en_dell/{id}",[RestoranController::class,"chef_en_dell"]);
Route::get("/admin/chef_uz_dell/{id}",[RestoranController::class,"chef_uz_dell"]);
Route::post("/admin/chef_uz_story",[RestoranController::class, 'chef_uz_story']);
Route::post("/admin/chef_en_story",[RestoranController::class, 'chef_en_story']);
Route::get('/admin/chef_uz/add',[RestoranController::class, 'chef_uz_add']);
Route::get('/admin/chef_en/add',[RestoranController::class, 'chef_en_add']);
Route::get('/admin/chefs_en',[RestoranController::class, 'chefs_en']);
Route::get('/admin/xodim',[RestoranController::class, 'chefs_uz']);
Route::post("/admin/menu_en_update/{id}",[RestoranController::class, 'menu_en_update']);
Route::get('/admin/menu_en_edit/{id}', [RestoranController::class, 'menu_en_edit']);
Route::get('/admin/menu_en_dell/{id}', [RestoranController::class, 'menu_en_dell']);
Route::post("/admin/menu_en_story",[RestoranController::class, 'menu_en_story']);
Route::get('/admin/menu_en_add', [RestoranController::class, 'menu_en_add']);
Route::resource('admin', RestoranController::class);
Route::get('/', [RestoranController::class, 'restoran']);
Route::get('/restoran', [RestoranController::class, 'restoran']);
Route::get('menu_en', [RestoranController::class, 'menu_en']);
