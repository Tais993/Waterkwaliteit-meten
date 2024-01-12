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
        Schema::create('deviceTypes', function (Blueprint $table) {
            $table->id();

            $table->string("naam");
            $table->string("type");
            $table->unsignedFloat("prijs");
            $table->unsignedBigInteger("voorraad");
            $table->string("description");
            $table->string("image")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deviceTypes');
    }
};