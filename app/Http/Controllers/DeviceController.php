<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\DeviceType;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request): mixed
    {
        if ($request->isMethod('GET')) {
            // Fetch parameters and pass them to the view
            $devicetypes = DeviceType::all(); // Fetch parameters from your database
            $users = User::all();
            return view('devices.create', compact('devicetypes', 'users'));
        }

        if ($request->isMethod('POST')) {
            // Validation and product creation logic here...
            // Assuming parameters are submitted as an array of IDs
            $validatedData = $request->validate([
                'device_type_id' => 'required|string',
                'user_id' => 'nullable|string',
                'macaddress' => 'required|string',
            ]);

            Device::create([
                'device_type_id' => $validatedData['device_type_id'],
                'user_id' => $validatedData['user_id'],
                'macaddress' => $validatedData['macaddress'],
            ]);

            return redirect()->route('devices.index')->with('success', 'Device created successfully!');
        } else {
            return redirect()->route('devices.create')->with('failure', 'Device not created, try again!');
        }
    }

    public function index(): View
    {
        // Fetching parameters without showing attached products
        $devices = Device::with('deviceType', 'user')->get()->all();

        return view('devices.index', compact('devices'));
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function delete($id): RedirectResponse
    {
        $device = Device::find($id);

        if (!$device) {
            return redirect()->route('devices.index')->with('failure', 'Product not found!');
        }

        $device->delete();

        return redirect()->route('devices.index')->with('success', 'Product deleted successfully!');
    }

    /**
     * @param $id
     * @return RedirectResponse|View
     */
    public function read($id): RedirectResponse|View
    {
        $device = Device::with('user', 'devicetype')->find($id);
        $devicetypes = DeviceType::all();
        $users = User::all();

        if (!$device) {
            return redirect()->route('devices.index')->with('failure', 'Product not found!');
        }

        return view('devices.edit', compact('device', 'devicetypes', 'users'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $device = Device::find($id);

        if (!$device) {
            return redirect()->route('devices.index')->with('failure', 'Product not found!');
        }

        // Update product attributes
        $device->update($request->all());

        return redirect()->route('devices.index')->with('success', 'Product updated successfully!');
    }

    public function apiFetch($id): JsonResponse
    {
        $devices = Device::where('user_id', $id)->get();

        if ($devices->isEmpty()) {
            return response()->json(['message' => 'No devices found for this user'], 404);
        }

        return response()->json(['devices' => $devices], 200);
    }
}
