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
        Schema::create('mahalla', function (Blueprint $table) {
            $table->id();
            $table->integer('OBJECTID')->primary();
            $table->string('Viloyat');
            $table->string('Tuman');
            $table->string('MFY_nomi');
            $table->string('Qaror_bilan_tasdiqlangan');
            $table->double('Shape_Length');
            $table->double('Shape_Area');
            $table->double('Mahalla_ID');
            $table->json('geometry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahalla');
    }
};
