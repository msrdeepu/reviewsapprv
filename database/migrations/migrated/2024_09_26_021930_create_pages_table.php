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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('meta')->nullable();
            $table->text('keywords')->nullable();
            $table->text('body1')->nullable();
            $table->text('body2')->nullable();
            $table->text('body3')->nullable();
            $table->text('body4')->nullable();
            $table->text('body5')->nullable();
            $table->text('body6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
