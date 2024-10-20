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
        Schema::create('childcategories', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            
       
            $table->unsignedBigInteger('subcategory_id'); 
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            
            $table->string('childcategory');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childcategories');
    }
};
