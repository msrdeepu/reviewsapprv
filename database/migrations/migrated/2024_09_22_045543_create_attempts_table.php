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
        Schema::create('attempts', function (Blueprint $table) {
           $table->id(); 
            $table->unsignedBigInteger('user_id')->nullable(); 
            $table->unsignedBigInteger('quiz_id')->nullable(); 
            $table->timestamp('attempted_on')->nullable();
            $table->integer('no_questions')->default(0);
            $table->integer('correct_answers')->default(0);
            $table->integer('wrong_answers')->default(0);
            $table->integer('marks')->default(0); 
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attempts');
    }
};
