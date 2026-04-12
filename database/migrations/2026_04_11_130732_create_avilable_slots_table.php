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
        Schema::create('avilable_slots', function (Blueprint $table) {
            $table->id();
            $table->integer('turf_id')->constrained('turfs')->cascadeOnDelete();
            $table->string('shift')->nullable();
            $table->time('avilable_from')->nullable();
            $table->time('avilable_to')->nullable();
            $table->decimal('rent_cost', 10, 2);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avilable_slots');
    }
};
