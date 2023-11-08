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
        Schema::create('controle_resultaten', function (Blueprint $table) {
            $table->id();
            $table->timestamp("gemaakt_op");

            $table->unsignedBigInteger("parameter_id");
            $table->unsignedBigInteger("controle_groep_id");

            $table->double("waarde");

            $table->foreign("parameter_id")->references("id")->on("parameters");
            $table->foreign("controle_groep_id")->references("id")->on("controle_groepen");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controle_resultaten');
    }
};
