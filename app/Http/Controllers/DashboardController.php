<?php

namespace App\Http\Controllers;

use App\Models\projects;
use App\Models\user;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $total_u=user::all()->count();
        $prepared=projects::all()->where('pro_status',0)->count();
        $ongoing=projects::all()->where('pro_status',1)->count();
        $finish=projects::all()->where('pro_status',2)->count();
        return view('dashboard',compact('total_u','prepared','ongoing','finish'));
        // echo $total_u."|".$prepared."|".$ongoing."|".$finish;
    }


}
