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
        Schema::create('sheets', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('archetype')->nullable();
            $table->integer('experience')->default(0);
            $table->integer('points')->default(10);
            
            $table->string('image')->nullable();

            $table->integer('power')->default(1);
            $table->integer('ability')->default(1);
            $table->integer('resistance')->default(1);
            
            $table->integer('life')->default(5);
            $table->integer('max_life')->default(5);

            $table->integer('mana')->default(5);
            $table->integer('max_mana')->default(5);

            $table->integer('action')->default(1);
            $table->integer('max_action')->default(1);
            
            $table->text('annotation')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheets');
    }
};
