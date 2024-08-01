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
        Schema::create('bento_portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('introduction')->nullable();
            $table->string('pronouns')->nullable();
            $table->string('relationship_status')->nullable();
            $table->string('occupation')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('threads')->nullable();
            $table->string('discord')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('profilepic')->nullable(); // Profile picture column
            $table->string('image2')->nullable(); // Additional image column
            $table->string('image3')->nullable(); // Additional image column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bento_portfolio');
    }
};
