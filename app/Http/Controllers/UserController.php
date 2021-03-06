<?php

namespace App\Http\Controllers;

use \App\Models\user;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    }

    public function store(Request $req)
    {   $file = $req->file('upload');
        $nama = $file->getClientOriginalName();
        $tujuan_upload = 'images/';
		$file->move($tujuan_upload,$nama);
        $hasil = [
            'foto' => $nama,
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
        
        // dd($req);
        if($req->ganti=="on") {
            $file = $req->file('foto');
            $nama = $file->getClientOriginalName();
            $tujuan_upload = 'images/';
            $file->move($tujuan_upload,$nama);
            $user = user::all()->where("id",$req->idu)->first()->update([
                'foto' => $nama,
                'username' => $req->username,
                'email' =>$req->email,
                'alamat' => $req->alamat,
                'no_hp' => $req->no_hp,
                // 'status' => $req->status
                
          ]);
        } else {
            $user = user::all()->where("id",$req->idu)->first()->update([
                'username' => $req->username,
                'email' =>$req->email,
                'alamat' => $req->alamat,
                'no_hp' => $req->no_hp,
                'status' => $req->status
                
          ]);
        }

       
// dd($user);
        // $user->username = 'Paris to London';

        // $user->save();
        return redirect('/profil');
    }

    public function cek()
    {
        $y = user::find(1);
        dd($y);
    }

    public function profil() {
        $idu=Auth::user()->id;
        $semua = user::all();
        $data = user::all()->where('id', $idu);
        // dd($data);
        return view('profil',['data' => $data, 'semua'=> $semua, 'idu'=>$idu]);
    }

    public function search(Request $request){
        if($request->ajax()){
            $output="";
            $users=user::all()->where('username','LIKE','%'.$request->search."%");
            if($users){
                    foreach ($users as $key => $product) {
                    $output.='<tr>'.
                    '<td>'.$product->id.'</td>'.
                    '<td>'.$product->username.'</td>'.
                    '<td>'.$product->email.'</td>'.
                    '<td>'.$product->no_hp.'</td>'.
                    '</tr>';
                    }
                return Response($output);
            }
        }
    }
}
    



