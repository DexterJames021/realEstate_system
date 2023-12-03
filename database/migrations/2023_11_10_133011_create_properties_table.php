<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id')->default(0);
            $table->string('coverImage'); //sierra vallley 
            $table->string('propertyName'); //sierra vallley 
            $table->string('unitType'); // 1br, 2br ,studio
            $table->string('category'); // sold ,reserved, available
            $table->bigInteger('totalPrize'); // 22 1 bedroom- 66 2 bedroom 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
         