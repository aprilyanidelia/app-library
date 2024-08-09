<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'username'=>'required|max:255',
            'password'=>'required|min:5|max:20',
            'email'=>'required|unique:users|email:dns',
            'nm_lengkap'=>'required',
            'alamat'=>'required'
        ]);

        try {
            User::create($validatedData);
            return redirect('/login/user')->with('success', 'Registration has been successful');
        } catch (\Exception $e) {
            return redirect('/login/user')->with('error', 'An error occurred in registering ' . $e->getMessage());
        }
    }
}
