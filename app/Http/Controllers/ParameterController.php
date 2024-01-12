<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
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
                    'name' => $validatedData['naam'],
                    'measuring_unit' => $validatedData['meetEenheid'],
                ]);

                return redirect()->route('parameters.index')->with('success', 'Parameter created successfully!');

            } catch (QueryException $e){

                return redirect()->route('parameters.create')->with('error', 'duplicate entry for parameter');
            }
        } else {

            return redirect()->route('parameters.create')->with('failure', 'Parameter not created. Please try again.');
        }
    }

    public function read($id): RedirectResponse|View
    {
        $parameter = Parameter::find($id);

        if (!$parameter) {
            return redirect()->route('products.index')->with('failure', 'Parameter not found!');
        }

        return view('parameters.edit', compact('parameter'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $parameter = Parameter::find($id);

        if (!$parameter) {
            return redirect()->route('parameters.index')->with('failure', 'Parameter not found!');
        }

        // Update product attributes
        $parameter->update($request->all());

        return redirect()->route('parameters.index')->with('success', 'Parameter updated successfully!');
    }

    public function delete($id): RedirectResponse
    {
        $parameter = Parameter::find($id);

        if (!$parameter) {
            return redirect()->route('parameters.index')->with('failure', 'Parameter not found!');
        }

        $parameter->delete();

        return redirect()->route('parameters.index')->with('success', 'Parameter deleted successfully!');
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
