<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
// use Illuminate\Validation\Validator;
// use PHPUnit\Util\Xml\Validator;
use Illuminate\Contracts\Validation\Validator;
use App\Models\User;


class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
        }
        return view('login');
    }

    public function login(Request $request)
    {

        // dd($request);
        $validator = $request->validate([
            'email'                 => 'required|email',
            
        ]);
        // dd($validator);
        return redirect()->back()->withErrors($validator)->withInput($request->all);
        // if (!$validator) {
        //     dd($validator);
        //     return redirect()->back()->withErrors($validator)->withInput($request->all);
        // }

        // $data = [
        //     'email'     => $request->input('email'),
        //     'password'  => $request->input('password'),
        // ];

        // Auth::attempt($data);

        // if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
        //     //Login Success
        //     return redirect()->route('home');
        // } else { // false

        //     //Login Fail
        //     Session::flash('error', 'Email atau password salah');
        //     return redirect()->route('login');
        // }

        // return view('profil');
    }

    public function showFormRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        
        $validator = $validated = $request->validate([
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed',
        ]);

        if (!$validator) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();

        if ($simpan) {
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('register');
        }
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
}
