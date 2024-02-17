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
        Schema::create('vouture_singles', function (Blueprint $table) {
            $table->bigIncrements('reference_id');
            $table->string('name');
            $table->timestamps();
            $table->bigInteger('voutuer_id');
            $table->bigInteger('vouture_no');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouture_singles');
    }
};
