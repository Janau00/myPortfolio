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
            $table->string('name');
            $table->string('introduction');
            $table->string('pronouns');
            $table->string('relationship_status');
            $table->string('occupation');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('threads');
            $table->string('discord');
            $table->string('tiktok');
            $table->string('image'); // Add this line for the image column
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
