<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('register'); // Adjust if necessary to point to the correct view
    }

    public function register(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        // Check validation
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Create new user with role = 'user'
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user',
            ]);

            // Log in the user immediately after creation
            Auth::login($user);

            // Redirect with success message
            return redirect()->route('account')->with('success', 'Account created and logged in successfully!');

        } catch (\Exception $e) {
            // Log the exception if something goes wrong
            Log::error('Error creating user:', ['error' => $e->getMessage()]);

            // Handle the error and redirect back with a failure message
            return redirect()->back()->with('error', 'An error occurred while creating your account. Please try again.');
        }
    }
}
