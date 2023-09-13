<?php

use App\Livewire\Frontend\Pages\AboutPage;
use App\Livewire\Frontend\Pages\ContactPage;
use App\Livewire\Frontend\Pages\HomePage;
use App\Livewire\Frontend\Pages\HotelListPage;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/",HomePage::class)->name('home');
Route::get("/about",AboutPage::class)->name('about');
Route::get("/contact",ContactPage::class)->name('contact');
Route::get("/hotels",HotelListPage::class)->name('hotel-list');
