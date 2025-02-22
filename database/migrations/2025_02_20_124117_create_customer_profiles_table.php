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
        Schema::create('customer_profiles', function (Blueprint $table) {
            $table->id();

       // customer details

            $table->string('cus_name');
            $table->string('cus_add');
            $table->string('cus_city');
            $table->string('cus_state');
            $table->string('cus_postcode');
            $table->string('cus_country');
            $table->string('cus_phone');
            $table->string('cus_fax');

       // shipping details

            $table->string('ship_name');
            $table->string('ship_add');
            $table->string('ship_city');
            $table->string('ship_state');
            $table->string('ship_postcode');
            $table->string('ship_country');
            $table->string('ship_phone');

            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_profiles');
    }
};
