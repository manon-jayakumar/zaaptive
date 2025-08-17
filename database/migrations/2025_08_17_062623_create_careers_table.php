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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('position');
            $table->string('short_description', 500)->nullable();
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->string('experience')->nullable();
            $table->string('package')->nullable();
            $table->string('skills')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
