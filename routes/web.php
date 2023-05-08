<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CacheStaticFilesMiddleware;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::middleware('cache.static')->group(function () {
Route::get('/', \App\Http\Controllers\ArticleController::class . '@listes');
Route::get('/{id}-{slug?}-{randch?}', [\App\Http\Controllers\ArticleController::class, 'retail'])->name('articles.retail');
});