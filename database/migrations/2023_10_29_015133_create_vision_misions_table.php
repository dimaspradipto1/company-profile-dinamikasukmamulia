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
        Schema::create('vision_misions', function (Blueprint $table) {
            $table->id();
            $table->text('vision');
            $table->text('mision1');
            $table->text('mision2');
            $table->text('mision3');
            $table->text('mision4');
            $table->text('mision5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vision_misions');
    }
};
