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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('seotitle');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->string('slug')->unique();
            $table->integer('views')->default(0);
            $table->integer('shares')->default(0);
            $table->integer('likes')->default(0);
            $table->text('thumb')->nullable();
            $table->text('featured_image')->nullable();
            $table->text('banner')->nullable();
            $table->text('meta')->nullable();
            $table->text('keywords')->nullable();
            $table->text('body1')->nullable();
            $table->text('body2')->nullable();
            $table->text('body3')->nullable();
            $table->text('body4')->nullable();
            $table->text('body5')->nullable();
            $table->text('body6')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
            
            // Foreign keys
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
