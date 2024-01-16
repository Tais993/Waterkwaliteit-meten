<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\JsonResponse;

class DeviceController extends Controller
{
    public function apiFetch($id): JsonResponse
    {
        $devices = Device::where('user_id', $id)->get();

        if ($devices->isEmpty()) {
            return response()->json(['message' => 'No devices found for this user'], 404);
        }

        return response()->json(['devices' => $devices], 200);
    }
}
