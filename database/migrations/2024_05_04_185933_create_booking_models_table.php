<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking_models', function (Blueprint $table) {
            $table->id('booking_id');
            $table->integer('turf_id');
            $table->string('turf_name');
            $table->integer('user_id');
            $table->string('user_name');
            $table->decimal('payment_amount', 8, 2);
            $table->string('payment_status');
            $table->boolean('is_booked')->default(false);
            $table->string('shift');
            $table->string('booked_slot');
            $table->dateTime('booking_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('turf_manager_id');
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_models');
    }
};
