<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;  // Laravel 7 doesn't need MOdel

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

    public function edit($id)
    {
        $user = User::find($id);  // Find the user by ID
        if ($user) {
            return view('admin.sub-pages.edit_account', compact('user'));
        }
        // If no user found, redirect with an error message
        return redirect()->route('admin.UserAccount')->with('error', 'User not found');
    }
    

    public function store(Request $request)
    {
        // Handle storing a new user account
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return redirect()->route('admin.UserAccount')->with('success', 'User created successfully.');
    }

    public function update(Request $request, $id)
    {
        // Handle updating the user account logic
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',  // Only validate password if it's being updated
        ]);

        $user = User::findOrFail($id);  // Find the user, or fail if not found
        $user->update($validated);

        return redirect()->route('admin.UserAccount')->with('success', 'User updated successfully.');
    }
}
