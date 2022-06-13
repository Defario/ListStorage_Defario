<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [ItemController::class, 'index']);

Route::get('/item/add', [ItemController::class, 'addItem']);

Route::get('/item/{id}/edit', [ItemController::class, 'editItem']);

Route::post('/item/create', [ItemController::class, 'createItem']);

Route::patch('/item/{id}/update', [ItemController::class, 'updateItem']);

Route::delete('/item/{id}/delete', [ItemController::class, 'deleteItem']);

Route::get('/item/furniture', [ItemController::class, 'furnitureItem']);

Route::get('/item/fnb', [ItemController::class, 'fnbItem']);

Route::get('/item/elect', [ItemController::class, 'electItem']);

Route::get('/item/any', [ItemController::class, 'anyItem']);
