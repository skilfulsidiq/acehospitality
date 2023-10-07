<?php

use App\Services\Vendors\VendorListService;

if (!function_exists('vendorService')) {
    function vendorService()
    {
        return app(VendorListService::class);
    }
}
if (!function_exists('appService')) {
    function appService($class)
    {
        return app($class);
    }
}
