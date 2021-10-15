<?php

namespace App\Http\Controllers;

use App\Models\projects;
use DateTime;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $data = projects::all();
        return view('projects', ['projects' => $data]);
        // dd(user::where('id', 3));
    }

    public function store(Request $req)
    {   $date = new DateTime('now');
        $hasil = [
            'pro_nama' => $req->proname,
            'tanggal_mulai' => $req->startdate,
            'pro_status' => $req->prostat,
            'pro_update' => $date,
        ];

        projects::insert($hasil);
        // // user::deleted()
        return redirect('/projects');
    }

    // public function hapus($id)
    // {
    //     $post = user::all()->where('id', $id)->each->delete();
    //     return redirect('/users');
    // }

    // public function update(Request $req)
    // {

    //     // dd($req);
    //     $user = user::all()->where("id", $req->idu)->first()->update([
    //         'username' => $req->username,
    //         'email' => $req->email,
    //         'alamat' => $req->alamat,
    //         // 'no_hp' => $req->no_hp,
    //         'status' => $req->status

    //     ]);
    // }
}
