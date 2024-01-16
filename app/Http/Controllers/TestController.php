<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function apiFetch($id): JsonResponse
    {
        $tests = Test::where('device_id', $id)->with('parameter', 'watersource')->get();

        if ($tests->isEmpty()) {
            return response()->json(['message' => 'No tests found for this device'], 404);
        }

        return response()->json(['tests' => $tests], 200);
    }
}
