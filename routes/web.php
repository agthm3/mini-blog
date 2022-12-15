<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PortofolioController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Home Route
Route::get('/', [HomeController::class, 'index'])->name('index');

//Blog Route
Route::post('/article', [ArticleController::class, 'store'])->name('store');
Route::get('/create', [ArticleController::class, 'create'])->name('create');
Route::get('/blog', [ArticleController::class, 'index'])->name('index.blog');

//Portofolio Route
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('index.portofolio');


//Kontak Route
Route::get('/kontak', [KontakController::class, 'index'])->name('index.kontak');



require __DIR__.'/auth.php';
