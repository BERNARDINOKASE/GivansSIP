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
        Schema::create('critic_and_suggests', function (Blueprint $table) {
            $table->ulid()->primary();
            $table->enum('category', ['Pengaduan', 'Kritik_dan_Saran'])->required();
            $table->longText('descriptions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('critic_and_suggests');
    }
};
