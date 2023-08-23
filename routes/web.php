<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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

Route::middleware('writer')->group(function(){
// rotta che mi porta al form per la creazione di un articolo
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
//Rotta article store
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
});

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

//Gruppo di rotte protetto da questo middleware
Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    //Richiesta per diventare admin/revisore/redattore
    Route::get('/admin/{user}/set-admin', [AdminController::class, 'setAdmin'])->name('admin.setAdmin');
    Route::get('/admin/{user}/set-revisor', [AdminController::class, 'setRevisor'])->name('admin.setRevisor');
    Route::get('/admin/{user}/set-writer', [AdminController::class, 'setWriter'])->name('admin.setWriter');

    //Rotta editing Admin
    Route::put('/admin/edit/{tag}/tag', [AdminController::class, 'editTag'])->name('admin.editTag');

    //Rotta per cancellazione tag
    Route::delete('/admin/delete/{tag}/tag', [AdminController::class, 'deleteTag'])->name('admin.deleteTag');

    //Rotta per categorie Admin
    Route::put('/admin/edit/{category}/category', [AdminController::class, 'editCategory'])->name('admin.editCategory');

    //Rotta per cancellazione categorie
    Route::delete('/admin/delete/{category}/category', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
});
Route::get('/article/search', [ArticleController::class,'articleSearch'])->name('article.search');
//Rotta che ci porta al revisore
Route::middleware('revisor')->group(function(){
    Route::get('/revisor/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');
    //Rotta che permette al revisore di accettare un articolo
    Route::get('/revisor/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');
    //Rotta che permette al revisore di rifiutare un articolo
    Route::get('/revisor/{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');
    //Rotta che permette al revisore di rimandare in revisione un articolo per una scelta sbagliata
    Route::get('/revisor/{article}/undo', [RevisorController::class, 'undoArticle'])->name('revisor.undoArticle');
    //Rotta che permette il funzionamento della barra search
    

    //Rotta per la creazione di nuove categorie
    Route::post('/admin/category/store', [AdminController::class, 'storeCategory'])->name('admin.storeCategory');


});




