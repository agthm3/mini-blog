<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\SearchController;

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
    return view('welcome');
});

//Dashboard
Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
})->middleware(['auth'])->name('dashboard');

//Search 
Route::get('/search', [ArticleController::class, 'search'])->name('search');

//Home Route
Route::get('/', [HomeController::class, 'index'])->name('index');

//Blog Route
Route::post('/article', [ArticleController::class, 'store'])->name('store');
Route::get('/create', [ArticleController::class, 'create'])->name('create');
Route::get('/blog', [ArticleController::class, 'index'])->name('index.blog'); //getAll article
Route::get('/blog/{id}', [ArticleController::class, 'show'])->name('show.blog');

//Portofolio Route
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('index.portofolio');
Route::get('/portofolio/{id}', [PortofolioController::class, 'show'])->name('show.portofolio');


//Kontak Route
Route::get('/kontak', [KontakController::class, 'index'])->name('index.kontak');

//Dashboard
Route::prefix('dashboard')->middleware('auth')->group(function () {
  Route::get('index', [DashboardController::class, 'index'])->name('dashboard.index');

  //Artikel & Blog
  Route::get('blog', [DashboardController::class, 'blog'] )->name('blog.index');
  Route::get('create', [DashboardController::class, 'create'])->name('blog.create');

});

require __DIR__.'/auth.php';
