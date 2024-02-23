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
            $table->ulid('id')->primary();
            //untuk nip/nis user
            $table->string('second_id')->unique();
            $table->string('full_name');
            $table->string('phone_number');
            $table->enum('gender', ['male', 'female']);
            // role untuk user
            $table->enum('role', [
                'guest', 'student', 'admin', 'gd_teacher', 'hr_teacher'
            ]);
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
