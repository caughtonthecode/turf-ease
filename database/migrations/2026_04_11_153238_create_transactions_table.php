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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->unique();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('gateway_transaction_id')->nullable();

            $table->decimal('amount', 10, 2);
            $table->decimal('fee', 10, 2)->default(0);
            $table->decimal('tax', 10, 2)->default(0);
            $table->decimal('net_amount', 10, 2)->nullable();
            $table->string('currency', 10)->default('BDT');

            $table->string('payment_method'); // card, bkash, nagad, rocket, etc.
            $table->string('payment_gateway')->nullable(); // SSLCommerz, Stripe, PayPal

            $table->timestamp('paid_at')->nullable();

            $table->ipAddress('user_ip_address')->nullable();
            $table->text('gateway_response')->nullable(); // Store raw JSON response
            $table->string('failure_reason')->nullable();

            $table->json('metadata')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
