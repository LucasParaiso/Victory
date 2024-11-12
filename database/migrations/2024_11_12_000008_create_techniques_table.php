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
        Schema::create('techniques', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sheet');
            $table->string('title');
            $table->text('description');
            $table->string('requirement')->nullable();
            $table->string('range')->nullable();
            $table->string('cost')->nullable();
            $table->string('duration')->nullable();

            $table->foreign('sheet')
                  ->references('id')
                  ->on('sheets')
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
        Schema::dropIfExists('techniques');
    }
};
