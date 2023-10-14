<?php

use App\Livewire\Frontend\Pages\AboutPage;
use App\Livewire\Frontend\Pages\ContactPage;
use App\Livewire\Frontend\Pages\HomePage;
use App\Livewire\Frontend\Pages\Hotels\HotelListPage;
use App\Livewire\Frontend\Pages\Hotels\HotelDetails;
use App\Livewire\Frontend\Pages\Reservation\MainPage;
use App\Livewire\Frontend\Pages\Reservation\StepOne;
use App\Livewire\Frontend\Pages\ReservationPage;
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

Route::get('/welcome', function () {

    // $r = Hash::make();
    return view('welcome');
});


Route::get("/",HomePage::class)->name('home');
Route::get("/about",AboutPage::class)->name('about');
Route::get("/contact",ContactPage::class)->name('contact');
Route::get("/hotels",HotelListPage::class)->name('hotel-list');
Route::get("/hotel-details/{slug?}",HotelDetails::class)->name('hotel-details');
Route::get("/reservation",MainPage::class)->name('reservation-page');

// Route::group(['prefix'=>'reservation'],function(){
//     Route::get("/select-room", StepOne::class)->name('reservation-step-one-page');
//     Route::get("/form", StepTwo::class)->name('reservation-step-two-page');
// });
