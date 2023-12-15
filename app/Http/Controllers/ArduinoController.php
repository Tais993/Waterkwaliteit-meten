<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
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

    public function getMeasuredData(): View
    {
        $latestMeasurement = DB::table('resultaten')
            ->orderBy('created_at', 'desc')
            ->first('waarde');

        if($latestMeasurement == null) {
            return view('countries/senegal');
        }

        $pHValue = $latestMeasurement->waarde;

        return view('countries/senegal', ['pHValue' => $pHValue]);
    }
}
