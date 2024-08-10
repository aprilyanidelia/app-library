<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function user(){
        return view('login.user');
    }

    public function admin(){
        return view('login.admin');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username'=>'required|max:255',
            'password'=>'required|min:5',
        ]);

    
        if (Auth::attempt($credentials)) {
            $user=Auth::user();
                if($user->role == 'admin'||'petugas'){
                    return redirect()->intended('/dashboard');
                }
                return back()->with('error', 'Anda tidak memiliki akses');
        }

        $user= User::where('username', $credentials['username'])->first();

        if(!$user){
            return back()->with('error','Akun tidak ditemukan');
        }

        return back()->with('error','Password atau username salah');

    }

    public function authenticate_user(Request $request)
    {
        $credentials = $request->validate([
            'username'=>'required|max:255',
            'password'=>'required|min:5',
        ]);

        if (Auth::attempt($credentials)) {
            $user=Auth::user();
                if($user->role == 'user'){
                    return redirect()->intended('/dashboard/user');
                }
        }

        $user= User::where('username', $credentials['username'])->first();

        if(!$user){
            return back()->with('error','Akun tidak ditemukan');
        }

        return back()->with('error','Password atau username salah');

    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
