<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PagesController;

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

//  Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is ' . $id . ' of the name ' . $name;
// });

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

// Route::get('/about', function () {
//     return view('pages.about');+
// });

//Modern Laravel 8 Use
Route::resource('posts', 'App\Http\Controllers\PostsController');