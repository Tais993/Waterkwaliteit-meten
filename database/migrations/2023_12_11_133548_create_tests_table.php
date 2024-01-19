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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('watersource_id')->default(1)->constrained('watersources');
            $table->foreignId('device_id')->constrained('devices');
            $table->foreignId('parameter_id')->constrained('parameters');
            $table->timestamp('tested_on');
            $table->bigInteger("value");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
