<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return redirect('/user');
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/content', [ContentController::class, 'index']);
Route::get('/api', [UserController::class, 'api']);
