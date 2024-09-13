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

    
    public function add_staff(){
        return view('dashboard.staff.addStaff');
    }

    public function reg_staff(Request $request)
    {
        $validateData=$request->validate([
            'username'=>'required|max:255',
            'password'=>'required|min:5|max:20',
            'email'=>'required|unique:users|email:dns',
            'nm_lengkap'=>'required',
            'alamat'=>'required',
        ]);
        
        $validateData['role'] = 'petugas';

        try {
            User::create($validateData);
            return redirect('/add_staff')->with('success', 'Registration has been successful');
        } catch (\Exception $e) {
            return redirect('/add_staff')->with('error', 'An error occurred in registering ' . $e->getMessage());
        }
    }

    public function destroy(string $id){
        // User::where('id'=== 'petugas',$id)->delete();
        $user = User::where('role', 'petugas')->where('id', $id)->first();

        // Jika pengguna ditemukan, hapus
        if($user) {
            $user->delete();
        }
        return redirect('/data_staff');
    }
}
