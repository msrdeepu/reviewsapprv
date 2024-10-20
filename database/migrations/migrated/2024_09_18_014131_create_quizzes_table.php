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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('slug')->unique();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('metadata')->nullable();
            $table->text('keywords')->nullable();
            $table->integer('questions');
            $table->integer('marks');
            $table->integer('duration'); 
            $table->timestamps();

            // Foreign keys
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
