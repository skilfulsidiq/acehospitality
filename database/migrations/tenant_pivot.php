<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin_hotel', function (Blueprint $table) {
            // $table->id();
            $table->foreignId('admin_id')->constrained('admins')->index();
            $table->foreignId('hotel_id')->constrained('hotels')->index();


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_hotel');
    }
};
