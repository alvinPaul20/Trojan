<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function adminPage()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }



    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.UserAccount')->with('success', 'User deleted successfully.');
    }
}