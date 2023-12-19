<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function create(Request $request): mixed
    {
        if ($request->isMethod('GET')) {
            // If it's a GET request, return the view for creating a parameter
            return view('parameters.create');
        }

        if ($request->isMethod('POST')) {
            try {
                // Validation and parameter creation logic here...
                $validatedData = $request->validate([
                    'naam' => 'required|string',
                    'meetEenheid' => 'required|string'
                ]);

                Parameter::create([
                    'naam' => $validatedData['naam'],
                    'meetEenheid' => $validatedData['meetEenheid'],
                    'created_at' => now()
                ]);

                return redirect()->route('parameters.index')->with('success', 'Parameter created successfully!');

            } catch (QueryException $e){
                // If a query exception occurs, handle the error
                $errorMessage = $e->getMessage();
                return redirect()->route('parameters.create')->with('error', 'duplicate entry for parameter');
                }
            } else {

            return redirect()->route('parameters.create')->with('failure', 'Parameter not created. Please try again.');
        }
    }

    public function read($id): JsonResponse
    {
        $parameter = Parameter::find($id);

        if (!$parameter) {
            return response()->json(['message' => 'Parameter not found'], 404);
        }

        // Return the parameter details
        return response()->json($parameter);
    }

    public function update(Request $request, $id): JsonResponse
    {
        // Similar logic for updating a parameter by ID
    }

    public function delete($id): JsonResponse
    {
        // Similar logic for deleting a parameter by ID
    }

    public function index(): View
    {
        // Fetching parameters without showing attached products
        $parameters = Parameter::all();

        return view('parameters.index', compact('parameters'));
    }

    public function apiIndex(): Collection|array
    {
        // Fetching parameters without showing attached products for API
        return Parameter::all();
    }
}
