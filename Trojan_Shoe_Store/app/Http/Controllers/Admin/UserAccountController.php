<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash; // Import the Hash facade for password hashing

class UserAccountController extends Controller
{
    public function index()
    {
        // Retrieve all users
        $users = User::all();
        return view('admin.UserAccount', compact('users'));
    }

    public function create()
    {
        // Return the add account form view
        return view('admin.sub-pages.addAccount');
    }

    public function store(Request $request)
{
    // Validate input
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',  // Ensure password confirmation is validated
        'role' => 'required|string|in:admin,subadmin,user',  // Ensure role is valid
    ]);

    try {
        // Create a new user with the provided role and hashed password
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),  // Hashing the password
            'role' => $validated['role'],  // Assigning the role
        ]);

        return redirect()->route('admin.UserAccount')->with('success', 'User created successfully.');

    } catch (\Exception $e) {
        // Handle any errors (e.g., if the user cannot be created)
        return redirect()->back()->with('error', 'An error occurred while creating the user. Please try again.');
    }
}


    public function update(Request $request, $id)
    {
        // Handle updating the user account logic
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',  // Only validate password if it's being updated
            'role' => 'required|string|in:admin,subadmin,user',  // Ensure role is valid during update
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => $validated['role'],  // Update role if needed
            'password' => $validated['password'] ? Hash::make($validated['password']) : $user->password,  // Hash password if provided
        ]);

        return redirect()->route('admin.UserAccount')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        // Handle deleting a user
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.UserAccount')->with('success', 'User deleted successfully.');
    }
}
