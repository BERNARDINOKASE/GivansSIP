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
        Schema::create('reports', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->date('date_of_incident')->required();
            $table->string('location_of_incident')->required();
            $table->longText('chronology')->required();
            $table->string('evidence')->required();
            $table->string('solutions', 255)->nullable();
            $table->text('guide_teacher_notes')->nullable();
            $table->text('guide_teacher_notes')->nullable();
            $table->text('affairs_teacher_notes')->nullable();
            $table->text('head_master_notes')->nullable();
            $table->enum('status', ['menunggu', 'proses', 'selesai'])->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
