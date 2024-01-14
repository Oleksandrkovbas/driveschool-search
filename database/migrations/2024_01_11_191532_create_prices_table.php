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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('coop')->nullable();
            $table->string('license')->nullable();
            $table->string('product')->nullable();
            $table->string('books')->nullable();
            $table->string('tests')->nullable();
            $table->string('onsite')->nullable();
            $table->string('online')->nullable();
            $table->string('practical')->nullable();
            $table->integer('numberOfPractical')->nullable();
            $table->integer('price')->nullable();
            $table->integer('extraLesson')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
