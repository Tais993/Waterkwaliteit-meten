<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Models\DeviceType;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DeviceTypeController extends Controller
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
                'name' => 'required|string',
                'price' => 'required|string',
                'stock' => 'required|integer',
                'description' => 'required|string',
                'image' => 'nullable|string',
                'parameters' => 'required|array'
            ]);

            $product = DeviceType::create([
                'name' => $validatedData['name'],
                'price' => $validatedData['price'],
                'stock' => $validatedData['stock'],
                'description' => $validatedData['description'],
                'image' => $validatedData['image']
            ]);

            $product->parameters()->attach($validatedData['parameters']);

            return redirect()->route('products.index')->with('success', 'Device type created successfully!');
        } else {
            return redirect()->route('devicetype.create')->with('failure', 'Device type not created, try again!');
        }
    }

    /**
     * @param $id
     * @return RedirectResponse|View
     */
    public function read($id): RedirectResponse|View
    {
        $product = DeviceType::with('parameters')->find($id);
        $parameters = Parameter::all();
        if (!$product) {
            return redirect()->route('products.index')->with('failure', 'Product not found!');
        }

        return view('products.edit', compact('product', 'parameters'));
    }

    /**
     * @param $id
     * @return RedirectResponse|View
     */
    public function readStore($id): RedirectResponse|View
    {
        $product = DeviceType::with('parameters')->find($id);

        if (!$product) {
            return redirect()->route('products.index')->with('failure', 'Product not found!');
        }

        return view('product', compact('product'));
    }

    /**
     * @param $id
     * @return RedirectResponse|View
     */
    public function checkOut($id): RedirectResponse|View
    {
        $product = DeviceType::find($id);

        if (!$product) {
            return redirect()->route('products.index')->with('failure', 'Product not found!');
        }

        return view('checkout', compact('product'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $product = DeviceType::find($id);

        if (!$product) {
            return redirect()->route('products.index')->with('failure', 'Product not found!');
        }

        // Update product attributes
        $product->update($request->all());

        // Update product parameters
        $parameters = $request->input('parameters', []);
        $product->parameters()->sync($parameters);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function delete($id): RedirectResponse
    {
        $product = DeviceType::find($id);

        if (!$product) {
            return redirect()->route('products.index')->with('failure', 'Product not found!');
        }

        $product->parameters()->detach(); // Assuming you want to detach parameters related to this product first
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    /**
     * @return View
     */
    public function index(): View
    {
        // Load products with their associated parameters
        $products = DeviceType::with('parameters')->get();

        return view('products.index', compact('products'));
    }

    public function apiIndex(): Collection|array
    {
        return DeviceType::with('parameters')->get();
    }
}
