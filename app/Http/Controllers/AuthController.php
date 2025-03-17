<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_dasboard(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['name'=> $request->username, 'password'=> $request->password])){
            return redirect()->route('berita.list');
        }

        return redirect()->back()->withErrors(['login' => 'Cek Kembali User Password']);
    } 

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
