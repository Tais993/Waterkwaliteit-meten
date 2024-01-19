<?php

namespace Database\Factories;

use App\Models\Device;
use App\Models\Parameter;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'watersource_id' => in_array($id = rand(2, 4), [2, 3, 4]) ? $id : rand(2, 4),
            'device_id' => Device::pluck('id')->random(),
            'parameter_id' => Parameter::pluck('id')->random(),
            'value' => rand(0, 15),
            'tested_on' => Carbon::now()->subMonths(rand(0, 2))->day(rand(1, 28)),
        ];
    }
}
