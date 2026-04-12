<?php

use App\Constants\Constants;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_reference')->unique();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('booking_id')->constrained()->cascadeOnDelete();

            $table->decimal('amount', 10, 2);
            $table->string('currency', 10)->default('BDT');

            $table->enum('status', [
                Constants::PAYMENT_STATUS_PENDING,
                Constants::PAYMENT_STATUS_PROCESSING,
                Constants::PAYMENT_STATUS_PAID,
                Constants::PAYMENT_STATUS_FAILED,
                Constants::PAYMENT_STATUS_CANCELLED,
                Constants::PAYMENT_STATUS_REFUNDED,
                Constants::PAYMENT_STATUS_PARTIALLY_REFUNDED,
            ])->default(Constants::PAYMENT_STATUS_PENDING);

            $table->timestamp('paid_at')->nullable();
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
