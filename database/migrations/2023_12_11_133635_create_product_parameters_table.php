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
        Schema::create('product_parameters', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("parameter_id");
            $table->unsignedBigInteger("product_id");

            $table->timestamps();

            $table->foreign("parameter_id")->references("id")->on("parameters");
            $table->foreign("product_id")->references("id")->on("products");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_parameters');
    }
};
