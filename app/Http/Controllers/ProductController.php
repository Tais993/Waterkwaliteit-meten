<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request): mixed
    {
        if ($request->isMethod('GET')) {
            // Fetch parameters and pass them to the view
            $parameters = Parameter::all(); // Fetch parameters from your database
            return view('products.create', compact('parameters'));
        }

        if ($request->isMethod('POST')) {
            // Validation and product creation logic here...
            // Assuming parameters are submitted as an array of IDs
            $validatedData = $request->validate([
                'naam' => 'required|string',
                'type' => 'required|string',
                'voorraad' => 'required|integer',
                'parameters' => 'required|array'
            ]);

            $product = Product::create([
                'naam' => $validatedData['naam'],
                'type' => $validatedData['type'],
                'voorraad' => $validatedData['voorraad']
            ]);

            $product->parameters()->attach($validatedData['parameters']);

            return redirect()->route('products.index')->with('success', 'Product created successfully!');
        } else {
            return redirect()->route('products.create')->with('failure', 'Product not created try again!');
        }
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function read($id): JsonResponse
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return $product;
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->update($request->all());

        return $product;
    }

    public function delete($id): JsonResponse
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->parameters()->detach(); // Assuming you want to detach parameters related to this product first
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }

    /**
     * @return View
     */
    public function index(): View
    {
        // Load products with their associated parameters
        $products = Product::with('parameters')->get();

        return view('products.index', compact('products'));
    }

    public function apiIndex(): Collection|array
    {
        return Product::with('parameters')->get();
    }
}
