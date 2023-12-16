<?php
use App\Helpers\StringGenerator;
use App\Services\Cart\CartService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

if (!function_exists('getStartAndEndDate')) {
    function getStartAndEndDate($v)
    {
        $today = Carbon::today();
        $tomorrow = $today->addDay();
        $d = explode(' ', $v);
        $start = (isset($d[0]))? Carbon::parse($d[0]):$today;
        $end = (isset($d[2]))? Carbon::parse($d[2]):$tomorrow;

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
if (!function_exists('countBookedRooms')) {
    function countBookedRooms($room_group_id, $date)
    {


        $d = getStartAndEndDate($date);
        $start = $d['start'];
        $end = $d['end'];

        $count = DB::table('room_bookings')
            // ->selectRaw('IFNULL(room_groups.no_of_rooms-room_groups.no_reserved_room-sum(room_bookings.quantity), (select (rg2.no_of_rooms-rg2.no_reserved_room) from room_groups rg2 where rg2.id=?)) as available_rooms',[$room_group_id])
            ->join('bookings', 'room_bookings.booking_id', '=', 'bookings.id')
            ->join('room_groups', 'room_bookings.room_group_id', '=', 'room_groups.id')
            ->whereDate('arrival_date', '<=', $end)
            ->whereDate('.departure_date', '>=', $start)
            ->whereDate('arrival_date', '!=', $end)
            ->whereDate('departure_date', '!=', $start)
            ->where('bookings.payment_status', '>', 0)
            ->where('room_groups.id', $room_group_id)->sum('quantity');



        return (int) $count;
        // return (int)$count->available_rooms;
    }
}
if (!function_exists('toCarbon')) {
    function toCarbon($date)
    {
        return Carbon::parse($date);
    }
}
if (!function_exists('calculateNight')) {
    function calculateNight($start, $end)
    {
        $arrival = toCarbon($start);
        $departure = toCarbon($end);
        $night = $departure->diffInDays($arrival);
        return $night;
    }
}
if (!function_exists('getRoomCartItem')) {
    function getRoomCartItem($id)
    {
        return
            appService(CartService::class)->getCartDetails($id)['data'];
    }
}
if (!function_exists('clearCart')) {
    function clearCart()
    {
         $cart = appService(CartService::class)->clearAllCart();
    }
}
if (!function_exists('removeItemFromCart')) {
    function removeItemFromCart($id)
    {
         $cart = appService(CartService::class)->removeCart($id);
    }
}
if (!function_exists('cartList')) {
    function cartList()
    {
        return appService(CartService::class)->cartList()['data'];
    }
}
if (!function_exists('cartList')) {
    function cartIsEmpty()
    {
        $cartItems = \Cart::getContent();
        if (empty($cartItems)) {
            return true;
        }
        return false;
    }
}
if (!function_exists('getPercentageValue')) {
    function getPercentageValue($per, $amount)
    {
        return round(($amount * $per) / 100);
    }
}
if (!function_exists('generateBookingRef')) {
    function generateBookingRef($user_id)
    {
        $ref = "BFF-" . $user_id . "-" . StringGenerator::generateNumber(6);
        // Carbon::createFromFormat('Y-m-d', $date)->toDateString();
        return $ref;
    }
}

