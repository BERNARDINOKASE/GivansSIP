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
        Schema::table('reports', function (Blueprint $table) {
            $table->foreignUlid('users_id')->required()->after('id')->constrained();
        });
        Schema::table('reports', function (Blueprint $table) {
            $table->foreignUlid('head_room_teacher_id')->required()->after('id')->constrained();
        });
        Schema::table('reports', function (Blueprint $table) {
            $table->foreignUlid('guide_teacher_id')->required()->after('id')->constrained();
        });
        Schema::table('reports', function (Blueprint $table) {
            $table->foreignUlid('affairs_teacher_id')->required()->after('id')->constrained();
        });
        Schema::table('reports', function (Blueprint $table) {
            $table->foreignUlid('head_master_id')->required()->after('id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->dropForeign(['users_id, head_room_teacher_id, guide_teacher_id, affairs_teacher_id, head_master_id']);
            $table->dropColumn('users_id');
        });
    }
};
