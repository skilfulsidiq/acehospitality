<?php

use App\Livewire\Backend\Auth\ForgotPage;
use App\Livewire\Backend\Auth\LoginPage;
use App\Livewire\Frontend\Pages\AboutPage;
use App\Livewire\Frontend\Pages\ContactPage;
use App\Livewire\Frontend\Pages\EventDetailPage;
use App\Livewire\Frontend\Pages\EventPage;
use App\Livewire\Frontend\Pages\HomePage;
use App\Livewire\Frontend\Pages\Hotels\HotelListPage;
use App\Livewire\Frontend\Pages\Hotels\HotelDetails;
use App\Livewire\Frontend\Pages\Reservation\MainPage;
use App\Livewire\Frontend\Pages\Reservation\StepOne;
use App\Livewire\Frontend\Pages\Reservation\SuccessPage;
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

    $t = [ ['title'=>'abe','subtitke'=>"bb","subtitle3"=>'hdjjd']  ];
    dd(json_encode($t));
    // $r = Hash::make("");
    // echo $r;
    // return view('welcome');
});


Route::get("/",HomePage::class)->name('home');
Route::get("/about",AboutPage::class)->name('about');
Route::get("/contact",ContactPage::class)->name('contact');
Route::get("/events",EventPage::class)->name('events');
Route::get("/event-details/{slug}",EventDetailPage::class)->name('event-details');
Route::get("/hotels",HotelListPage::class)->name('hotel-list');
Route::get("/hotel-details/{slug}",HotelDetails::class)->name('hotel-details');
Route::get("/hotels/{slug}",HotelDetails::class)->name('hotel-details-2');
Route::get("/reservation",MainPage::class)->name('reservation-page');
Route::get("/reservation-success",SuccessPage::class)->name('reservation-success');

// Route::group(['prefix'=>'admin'],function(){

//     Route::get('/',LoginPage::class)->name('login');
//     Route::get('forgot',ForgotPage::class)->name('forgot-password');
// });
