<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index'])->name('pages.home');
Route::get('/board', [PagesController::class, 'board'])->name('pages.board');
Route::get('/team', [PagesController::class, 'team'])->name('pages.team');
Route::get('/plans', [PagesController::class, 'plans'])->name('pages.plans');
Route::get('/corporate', [PagesController::class, 'corporate'])->name('pages.corporate');
Route::get('/aged', [PagesController::class, 'aged'])->name('pages.aged');
Route::get('/cart', [PagesController::class, 'cart'])->name('pages.cart');
Route::get('/enrollee', [PagesController::class, 'enrollee'])->name('pages.enrollee');
Route::get('/buy', [PagesController::class, 'buy'])->name('pages.buy');
Route::get('/quote', [PagesController::class, 'quote'])->name('pages.quote');
Route::get('/resources', [PagesController::class, 'resources'])->name('pages.resources');
Route::get('/provider', [PagesController::class, 'provider'])->name('pages.provider');
Route::get('/providers', [PagesController::class, 'providers'])->name('pages.providers');
Route::get('/benefits', [PagesController::class, 'benefits'])->name('pages.benefits');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
