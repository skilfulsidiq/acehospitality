<?php
use Carbon\Carbon;

if (!function_exists('getStartAndEndDate')) {
    function getStartAndEndDate($v)
    {
        $d = explode(' ', $v);
        $start = Carbon::parse($d[0]);
        $end = Carbon::parse($d[2]);

        return compact('start','end');
    }
}
if (!function_exists('getBookingFormDetail')) {
    function getBookingFormDetail()
    {
        // return session('booking-form');
        // dd(request());
    }
}
