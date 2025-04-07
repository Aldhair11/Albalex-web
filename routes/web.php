<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactformController;
use App\Http\Controllers\CategoriesController;


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
    return view('home.home');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact/create', [ContactController::class, 'create']);
//Route::post('/contact/store', [ContactController::class, 'store']);
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/feature', [FeatureController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);

Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::get('/portfolio{id}', [PortfolioController::class, 'products'])->name('portfolio');

Route::get('/contactform', [ContactformController::class, 'index']);
Route::post('/contactform/store', [ContactformController::class, 'store']);

Route::get('/categorias', [CategoriesController::class, 'index']);
