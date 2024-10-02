<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;
use App\Models\Peminjaman;

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

// Route::get('/dasbord', function () {
//     return view('landing');
// });

// // Route::get('landing', function () {
// //     return view('landing');
// // });

// Route::get('/landing', [LandingPageController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peminjaman',[PeminjamanController::class, 'index'])->name("peminjaman");

Route::get('/create',[PeminjamanController::class, 'create'])->name('create');

Route::post('/store',[PeminjamanController::class, 'store'])->name('store');