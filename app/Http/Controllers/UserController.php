<?php

namespace App\Http\Controllers;
use \App\Models\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{   
    public function __invoke()
    {
        dd('main');
    }

    public function index (){
        $data= user::all();
        return view('users', ['data'=>$data]);
        dd(user::where('id',3));
    }

    public function store (){
        $user = new user();

        $hasil = ['username' => "Reza",
                'alamat' => "Mataram",
                'email' => "a@b.com",
                'status' => 1,
                'foto'  => "kosong"];
      
        user::insert($hasil) ;
        // user::deleted()
        redirect('/users'); 

    }

    public function cek (){
        $y=user::find(1) ;
        // Auth::user($y);
        dd($y);
        // user::deleted()
        // redirect('/users'); 
    }

    public function dashboard () {
        return view('dashboard');
    }
}
