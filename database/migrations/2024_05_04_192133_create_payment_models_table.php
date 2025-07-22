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
        Schema::create('payment_models', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_id');
            $table->integer('user_id');
            $table->decimal('payment_amount', 8, 2);
            $table->string('transaction_id')->nullable();
            $table->dateTime('payment_time');
            $table->string('payment_method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_models');
    }
};
