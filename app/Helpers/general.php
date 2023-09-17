<?php
use Carbon\Carbon;

if (!function_exists('routeIsInGroup')) {
    function getRouteName()
    {
        return ucwords(Route::currentRouteName());
    }
}
if (!function_exists('routeIsInGroup')) {
    function routeIsInGroup($path)
    {
        return Request::is($path . '*');
    }
}
if (!function_exists('setActive')) {
    function setActive($path = [], $return = null)
    {
        $active = Route::currentRouteName();
        // return Request::is($path . '*') ? ' class=active' :  '';
        if (in_array($active, $path)) {
            return $return ? $return : 'active';
        } else {
            return '';
        }
    }
}
if (!function_exists('setOpenActive')) {
    function setOpenActive($path = [], $class = null)
    {
        $active = Route::currentRouteName();
        // return Request::is($path . '*') ? ' class=active' :  '';
        if (in_array($active, $path)) {
            return $class ?? 'open';
        } else {
            return '';
        }
    }
}

if (!function_exists('setActiveIcon')) {
    function setActiveIcon($activeIcon, $inactiveIcon, $path)
    {
        $active = Route::currentRouteName();
        // return Request::is($path . '*') ? ' class=active' :  '';
        if (in_array($active, $path)) {
            return $activeIcon;
        } else {
            return $inactiveIcon;
        }
    }
}



if (!function_exists('setSingleActive')) {
    function setSingleActive($path, $class = null)
    {
        $active = Route::currentRouteName();
        // return Request::is($path . '*') ? ' class=active' :  '';
        if ($active == $path) {
            return $class ?? 'active';
        } else {
            return '';
        }
    }
}

if (!function_exists('formatDateToDMY')) {
    function formatDateToDMY($date)
    {
        return Carbon::parse($date)->format("d-m-Y");
    }
}
