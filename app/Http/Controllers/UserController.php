<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    public function create(Request $request): mixed
    {
        if ($request->isMethod('GET')) {
            // If it's a GET request, return the view for creating a parameter
            $roles = Role::all();

            return view('users.create', compact('roles'));
        }

        if ($request->isMethod('POST')) {
            try {
                // Validation and parameter creation logic here...
                $data = $request->validate([
                    'first_name' => ['required', 'string', 'max:255'],
                    'last_name' => ['required', 'string', 'max:255'],
                    'phone_number' => ['required', 'string', 'max:20'],
                    'street' => ['required', 'string', 'max:255'],
                    'house_number' => ['required', 'string', 'max:50'],
                    'zipcode' => ['required', 'string', 'max:20'],
                    'city' => ['required', 'string', 'max:255'],
                    'country' => ['required', 'string', 'max:255'],

                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'role_id' => ['int', 'max:8']
                ]);

                User::create([
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'phone_number' => $data['phone_number'],
                    'street' => $data['street'],
                    'house_number' => $data['house_number'],
                    'zipcode' => $data['zipcode'],
                    'city' => $data['city'],
                    'country' => $data['country'],

                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'role_id' => $data['role_id']
                ]);

                return redirect()->route('users.index')->with('success', 'user created successfully!');

            } catch (QueryException $e){
                // If a query exception occurs, handle the error
                return redirect()->route('users.create')->with('error', 'duplicate entry for parameter');
                }
            } else {

            return redirect()->route('users.create')->with('failure', 'user not created. Please try again.');
        }
    }

    public function read($id): RedirectResponse|View
    {
        $user = User::find($id);
        $roles = Role::all();
        if (!$user) {
            return redirect()->route('users.index')->with('failure', 'user not found!');
        }

        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users.index')->with('failure', 'user not found!');
        }

        $oldUserData = $user->toArray(); // Capture the updated user data as an array

        $user->update($request->all());

        $newUserData = $user->toArray(); // Capture the updated user data as an array

        if($oldUserData == $newUserData) {
            return redirect()->route('users.index')->with('info', 'nothing changed!');
        }

        return redirect()->route('users.index')->with('success', 'user updated successfully!');
    }

    public function delete($id): RedirectResponse
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users.index')->with('failure', 'user not found!');
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'user deleted successfully!');
    }

    public function index(): View
    {
        // Fetching parameters without showing attached products
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function apiIndex(): Collection|array
    {
        // Fetching parameters
        return User::all();
    }

    public function ApiShow(): JsonResponse
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Retrieve the authenticated user
            $user = Auth::user();

            // Get the user's role (assuming a relationship exists between User and Role models)
            $role = $user->role->name ?? 'No role assigned'; // Assuming a 'role' relationship

            // Return the user details along with their role
            return response()->json([
                'user' => $user,
                'role' => $role,
            ]);
        } else {
            // User is not authenticated
            return response()->json(['message' => 'User is not authenticated'], 401);
        }
    }
}
