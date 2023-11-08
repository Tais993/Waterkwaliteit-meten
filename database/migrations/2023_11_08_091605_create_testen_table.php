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
        Schema::create('testen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('waterbronnen_id')->constrained('waterbronnen');

            $table->timestamp('getest_op');
            $table->dateTime('datumTijd');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testen');
    }
};
