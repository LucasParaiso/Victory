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
        Schema::create('skill_sheets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sheet');
            $table->unsignedBigInteger('skill');
            
            $table->foreign('sheet')
                  ->references('id')
                  ->on('sheets')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreign('skill')
                  ->references('id')
                  ->on('skills')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_sheets');
    }
};
