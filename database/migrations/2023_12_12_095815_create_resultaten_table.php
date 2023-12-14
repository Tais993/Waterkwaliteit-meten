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
        Schema::create('resultaten', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger("parameter_id");
            $table->unsignedBigInteger("test_id");
            $table->unsignedBigInteger("resultaat_id");
            $table->unsignedBigInteger("meter_id");

            $table->double("waarde");

            $table->foreign("parameter_id")->references("id")->on("parameters");
            $table->foreign("test_id")->references("id")->on("testen");
            $table->foreign("resultaat_id")->references("id")->on("resultaten");
            $table->foreign("meter_id")->references("id")->on("meters");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultaten');
    }
};
