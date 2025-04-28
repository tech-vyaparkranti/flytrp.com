<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

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

Route::get('/', function () {
    return view('frontend.index3');
});

Route::get('/about',[HomePageController::class,'aboutUs'])->name('about');
Route::get('/tour',[HomePageController::class,'tour'])->name('tour');
Route::get('/destination',[HomePageController::class,'destination'])->name('destination');
Route::get('/gallery',[HomePageController::class,'gallery'])->name('gallery');
Route::get('/contact',[HomePageController::class,'contact'])->name('contact');


include_once "adminRoutes.php";
