<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(){
        return view('pages.auth.login');
    }
    public function forgot(){
        return view('pages.auth.forgot');
    }
    public function dashboard(){
        return view('pages.dashboard');
    }
    public function allBookings(){
        return view('pages.booking_mgt.all_bookings');
    }
    public function addBooking(){
        return view('pages.booking_mgt.add_booking');
    }
    public function allRooms(){
        return view('pages.rooms_mgt.all_rooms');
    }
    public function addRoom(){
        return view('pages.rooms_mgt.add_room');
    }
    // public function dashboard(){
    //     return view('pages.dashboard');
    // }
}
