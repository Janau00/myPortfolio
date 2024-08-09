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
        Schema::create('portfoliodata', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('introduction', 250)->nullable();
            $table->string('pronouns')->nullable();
            $table->string('about', 500)->nullable();
            $table->string('occupation')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('threads')->nullable();
            $table->string('discord')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('profilepic')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfoliodata');
    }
};
