<?php

namespace App\Http\Controllers;

use \App\Models\user;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

// use Illuminate\Support\Facades\Auth;

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
        $hasil = [
            'foto' => 'hey',
            'username' => $req['nama'],
            'email' => $req['email'],
            'no_hp' => $req['no_hp'],
            'alamat' => $req['alamat'],
            'status' => $req['status'],
            'password' => Hash::make($req['pw'])
        ];

        user::insert($hasil);
        // // user::deleted()
        return redirect('/users');
    }

    public function hapus($id)
    {
        $post = user::all()->where('id', $id)->each->delete();
        return redirect('/users');
    }

    public function update(Request $req)
    {
        $user = user::all()->where("id",1)->first()->update([
            'username' => "SERRisma",
            'email' =>"xreza70",
            'alamat' => "disini",
            'no_hp' => "+62123"
            
      ]);
// dd($user);
        // $user->username = 'Paris to London';

        // $user->save();
        // return redirect('/users');
    }

    public function cek()
    {
        $y = user::find(1);
        dd($y);
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
