<?php

namespace App\Http\Controllers;

use App\Models\Watersource;
use Illuminate\View\View;

class WatersourceController extends Controller
{
    public function getTestData($country): View
    {
        // Retrieve the WaterSource for the given country
        $waterSource = Watersource::where('country', $country)->first();

        // If the WaterSource is found, retrieve the related tests
        $tests = $waterSource ? $waterSource->tests()->orderBy('tested_on', 'desc')->get() : collect();

        return view("Countries.$country", compact('tests'));
    }
}
