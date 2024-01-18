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
        Schema::create('device_type_parameter', function (Blueprint $table) {
            $table->id();

            $table->foreignId("parameter_id")->constrained("parameters");
            $table->foreignId("device_type_id")->constrained("device_types");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deviceType_parameter');
    }
};
