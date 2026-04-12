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
        Schema::create('turfs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('turf_details')->nullable();
            $table->integer('category_id')->constrained('categories')->cascadeOnDelete();
            $table->string('division');
            $table->string('district');
            $table->string('address');
            $table->decimal('rating', 3, 2)->nullable();
            $table->integer('total_rating')->default(0);
            $table->integer('total_review')->default(0);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->boolean('status')->default(1)->comment('active, inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turf_admin_models');
    }
};
