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
        Schema::create('attemptdetails', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('quiz_id'); 
            $table->unsignedBigInteger('question_id'); 
            $table->timestamp('attempted_on')->nullable();
            $table->text('answer');
            $table->text('hint_seen')->default(0);
            $table->integer('marks')->default(0); 
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attemptdetails');
    }
};
