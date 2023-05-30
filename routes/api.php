<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseRuleController;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\DiningRoomController;
use App\Http\Controllers\WeatherForecastController;
use App\Http\Controllers\UserManagementController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/custom_login', [LoginController::class, 'customLogin']);
Route::get('/home', HomeController::class);
Route::get('/house_rule', HouseRuleController::class);
Route::get('/watch&listen', WatchController::class);
Route::get('/dining_room', DiningRoomController::class);
Route::get('/weather_forecast', WeatherForecastController::class);
Route::prefix('user_management')->group(function (){
    Route::get('/', [UserManagementController::class, 'index']);
    Route::delete('/{id}', [UserManagementController::class, 'delete']);
    Route::patch('/{id}', [UserManagementController::class, 'update']);
});




// Route::prefix('blog')->group(function () {
//     Route::get('/', [PostsController::class, 'index'])->name('blog.index');
//     Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show');
//     Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
//     Route::post('/', [PostsController::class, 'store'])->name('blog.store');
//     Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
//     Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update');
//     Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
// });