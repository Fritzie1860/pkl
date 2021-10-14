<?php

namespace App\Http\Controllers;

use \App\Models\user;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __invoke()
    {
        dd('main');
    }

    public function index()
    {
        $data = user::all();
        return view('users', ['data' => $data]);
        dd(user::where('id', 3));
    }

    public function store(Request $req)
    {
        // echo ($req['nama']);
        // $user = new user();

        $hasil = [
            'foto' => 'hey',
            'username' => $req['nama'],
            'email' => $req['email'],
            'no_hp' => $req['no_hp'],
            'alamat' => $req['alamat'],
            // 'email'  => "kosong",
            'status' => $req['status'], 
            'password' => Hash::make($req['pw'])
        ];

        user::insert($hasil);
        // // user::deleted()
        redirect('/users');
    }

    public function cek()
    {
        $y = user::find(1);
        // Auth::user($y);
        dd($y);
        // user::deleted()
        // redirect('/users'); 
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
