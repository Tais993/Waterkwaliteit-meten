<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ArduinoController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $tabel = $data['tabel'];

        if (Schema::hasTable($tabel)) {

            unset($data['tabel']);
            $data['created_at'] = now();
            $data['updated_at'] = now();

            DB::table($tabel)->insert($data);

            return response()->json(['message' => 'Data successvol opgeslagen']);
        } else {
            return response()->json(['message' => 'tabel bestaat niet'], 400);
        }
    }
}
