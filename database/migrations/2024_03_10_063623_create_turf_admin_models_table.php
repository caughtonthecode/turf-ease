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
        Schema::create('turf_admin_models', function (Blueprint $table) {
            $table->id();
            $table->string('turf_name');
            $table->longText('description')->nullable();
            $table->string('division');
            $table->string('district');
            $table->string('address');
            $table->string('shift');
            $table->time('open_time');
            $table->time('close_time');
            $table->integer('price');
            $table->string('f_image')->nullable();
            $table->string('image_gallery')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_type')->nullable();
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
