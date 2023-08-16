<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
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

// rotta che mi permette di andare alla vista homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// rotta che mi porta al form per la creazione di un articolo
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

//Rotta article store
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

//Rotta article index
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

//Rotta article show

Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

//Rotta per filtro per categoria
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');

//Rotta per accedere agli articoli filtrati per redattore
Route::get('/article/by-Authors/{author}', [ArticleController::class, 'articlesByAuthors'])->name('article.byAuthors');

//Rotta che porta a "Lavora con noi"
Route::get('/careers', [PublicController::class, 'careers'])->name('careers');

//Rotta che gestisce submit
Route::post('/careers/submit', [PublicController::class, 'careersSubmit'])->name('careers.submit');



