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

        $tableColumns = Schema::getColumnListing($tabel);
        var_dump($tableColumns);

        if (Schema::hasTable($tabel)) {

            unset($data['tabel']); // verwijder tabel uit de data array zodat het niet gestuurd word naar de database
            $data['gemaakt_op'] = now();

            // Store the data in the corresponding table
            DB::table($tabel)->insert($data);

            return response()->json(['message' => 'Data successvol opgeslagen']);
        } else {
            return response()->json(['message' => 'tabel bestaat niet'], 400);
        }
    }
}
