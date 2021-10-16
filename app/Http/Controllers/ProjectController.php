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

    public function update(Request $req)
    {

        echo($req->idp);
        $date = new DateTime('now');
        $user = projects::all()->where("id_projects", $req->idp)->first()->update([
            'pro_nama' => $req->proname,
            'tanggal_mulai' => $req->stardate,
            'pro_status' => $req->prostatus,
            'pro_update' => $date,

        ]);
        return redirect('/projects');
    }

    public function hapus($id)
    {
        $post = projects::all()->where('id_projects', $id)->each->delete();
        return redirect('/projects');
    }
}
