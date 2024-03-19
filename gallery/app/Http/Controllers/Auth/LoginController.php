<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
          
            return redirect()->intended('admin/udahlogin');
        }
       
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'Email atau Password salah',
        ]);
    }

    public function logout()
{
    Auth::logout();
    return redirect('/login');
}

public function register(){
    return view('auth.register');
}
public function registerproses(Request $request){
    $request->validate([
        'nama' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required|min:6'
    ]);

    $data['name'] = $request->nama;
    $data['email'] = $request->email;
    $data['password'] = Hash::make($request->password);

    User::create($data);

    $login = $request->only('email', 'password');

        if (Auth::attempt($login)) {
            // Jika autentikasi berhasil, arahkan pengguna ke halaman dashboard
            return redirect()->intended('/login');
        }
        // Jika autentikasi gagal, kembali ke halaman login dengan pesan kesalahan
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'Email atau Password salah',
        ]);
}
protected $redirectTo = '/login';

}
