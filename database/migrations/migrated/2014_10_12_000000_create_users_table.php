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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('username')->nullable();
            $table->text('image')->nullable();
            $table->text('phone')->nullable();
            $table->text('membership')->default('free');
            $table->bigInteger('credits')->default(0);
            $table->enum('role', ['superadmin', 'admin', 'employee', 'user'])->default('user');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
