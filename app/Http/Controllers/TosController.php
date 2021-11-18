<?php

namespace App\Http\Controllers;

use App\Models\tos1footplat;
use App\Models\tos1oandh;
use App\Models\tos1pumproom;
use App\Models\tos1batukali;
use App\Models\tos2datafootplat;
use App\Models\tos2datakolom;
use App\Models\tos2kolompedestal;
use App\Models\tos2lewatan;
use App\Models\tos2pedestal;
use App\Models\tos2summary;
use App\Models\tos3data;
use App\Models\tos3ground;
use App\Models\tos3lewatan;
use App\Models\tos3pumproom;
use App\Models\tos3summary;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Group;

class TosController extends Controller
{

    public function index()
    {
        $Tos11 = tos1oandh::all();
        $Tos12 = tos1footplat::all();
        $Tos13 = tos1pumproom::all();
        $Tos14 = tos1batukali::all();

        $pedes = new tos2pedestal();
        $kopedes = new tos2kolompedestal();
        

        // dd($coba->detil());

        $Tos21 = $pedes->detil();
        $Tos22 = $kopedes->detil();
        $Tos23 = tos2summary::all();
        $Tos24 = tos2lewatan::all();
        $Tos25 = tos2datafootplat::all();
        $Tos26 = tos2datakolom::all();

        $ground = new tos3ground();
        $pumproom = new tos3pumproom();


        $tos31 = tos3data::all();
        $tos32 = $ground->detil();
        $tos33 = $pumproom->detil();
        $tos34 = tos3summary::all();
        $tos35 = tos3lewatan::all();

        

        return view('detil_project', [
            'Tos11' => $Tos11, 'Tos12' => $Tos12, 'Tos13' => $Tos13, 'Tos14' => $Tos14,
            'Tos21' => $Tos21, 'Tos22' => $Tos22, 'Tos23' => $Tos23,
            'Tos24' => $Tos24, 'Tos25' => $Tos25, 'Tos26' => $Tos26,
            'Tos31' => $tos31, 'Tos32' =>  $tos32, 'Tos33' => $tos33,
            'Tos34' => $tos34, 'Tos35' => $tos35
        ]);
    }

    public function hasil()
    {

        $pedes = new tos2pedestal();
        $kopedes = new tos2kolompedestal();
        

        // dd($coba->detil());

        $Tos21 = $pedes->detil();
        $Tos22 = $kopedes->detil();
        $Tos23 = tos2summary::all();
        $Tos24 = tos2lewatan::all();
        $Tos25 = tos2datafootplat::all();
        $Tos26 = tos2datakolom::all();

        return view('hasil', [
            'Tos21' => $Tos21, 'Tos22' => $Tos22, 'Tos23' => $Tos23,
            'Tos24' => $Tos24, 'Tos25' => $Tos25, 'Tos26' => $Tos26
        ]);
    }

    // Tos 1 OH
    public function in_tos11(Request $req)
    {
        $hasil = [
            'dia' => $req->dia,
            'p' => $req->p
        ];
        // dd($req);
        tos1oandh::insert($hasil);
        return redirect('/target');
    }

    public function del_tos11($id)
    {
        $post = tos1oandh::all()->where('id_tos11', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos11(Request $req)
    {
        //dd($req);
        $user = tos1oandh::all()->where("id_tos11", $req->idt)->first()->update([
            'dia' => $req->dia,
            'p' => $req->p,

        ]);
        return redirect('/target');
    }

    // Tos 1 Foot Plat
    public function in_tos12(Request $req)
    {
        //Koefisien
        $lc = 0.05;
        $pasir = 0.05;
        $OH_dia = 0.64;
        // Statis
        $type = $req['type'];
        $dfp_l = $req['dfp_l'];
        $dfp_p = $req['dfp_p'];
        $dfp_t = $req['dfp_t'];
        $level_mta = $req['level_MTA'];
        $jumlah = $req['jumlah'];
        $tav_dia = $req['tav_dia'];
        $tav_jarak = $req['tav_jarak'];
        $tbv_dia = $req['tbv_dia'];
        $tbv_jarak = $req['tbv_jarak'];
        $tbh_dia = $req['tbh_dia'];
        $tbh_jarak = $req['tbh_jarak'];
        $tah_dia = $req['tah_dia'];
        $tah_jarak = $req['tah_jarak'];
        $tp_dia = $req['tp_dia'];
        $tp_jum = $req['tp_jum'];
        // Dinamis
        $tav_p = $dfp_p;
        $tav_add = ($dfp_t + (8 * $tav_dia * 0.001)) * 2;
        $tav_jum = ceil(($dfp_l / ($tav_jarak / 1000)) + 1);
        $tav_bjenis = 0.006165 * $tav_dia * $tav_dia;
        $tav_total = ((($tav_p + $tav_add) * $tav_jum) * $tav_bjenis) * $jumlah;
        $tbv_p = $dfp_p;
        $tbv_add = ($dfp_t + (8 * $tbv_dia * 0.001)) * 2;
        $tbv_jum = ceil(($dfp_l / ($tbv_jarak / 1000)) + 1);
        $tbv_bjenis = 0.006165 * $tbv_dia * $tbv_dia;
        $tbv_total = ((($tbv_p + $tbv_add) * $tbv_jum) * $tbv_bjenis) * $jumlah;
        $tah_p = $dfp_p;
        $tah_add = ($dfp_t + (8 * $tah_dia * 0.001)) * 2;
        $tah_jum = ceil(($dfp_l / ($tah_jarak / 1000)) + 1);
        $tah_bjenis = 0.006165 * $tah_dia * $tah_dia;
        $tah_total = ((($tah_p + $tah_add) * $tah_jum) * $tah_bjenis) * $jumlah;
        $tbh_p = $dfp_p;
        $tbh_add = ($dfp_t + (8 * $tbh_dia * 0.001)) * 2;
        $tbh_jum = ceil(($dfp_l / ($tbh_jarak / 1000)) + 1);
        $tbh_bjenis = 0.006165 * $tbh_dia * $tbh_dia;
        $tbh_total = ((($tbh_p + $tbh_add) * $tbh_jum) * $tbh_bjenis) * $jumlah;
        $tp_p = ((($dfp_l + $dfp_p) * 2) + ($OH_dia * 1.5) * 4) * $tp_jum;
        $tp_total = (0.006165 * $tbh_dia * $tbh_dia * $tp_p) * $jumlah;
        $v_besi = $tbh_total + $tbv_total + $tah_total + $tav_total + $tp_total;
        $v_beton = (($dfp_l * $dfp_p) * $dfp_t) * $jumlah;
        $v_bb = ($dfp_p + $dfp_l) * 2 * 0.4 * $jumlah;
        $v_galian = ($dfp_p * $dfp_l) * ($level_mta + $lc + $pasir) * $jumlah;
        $v_lc = ($dfp_p * $dfp_l) * $lc * $jumlah;
        $v_pasir = ($dfp_l * $dfp_p) * $jumlah;

        // dd($req);

        $hasil = [
            'type' => $req->type,
            'dfp_l' => $req->dfp_l,
            'dfp_p' => $req->dfp_p,
            'dfp_t' => $req->dfp_t,
            'level_mta' => $req->level_mta,
            'jumlah' => $req->jumlah,
            'tav_dia' => $req->tav_dia,
            'tav_jarak' => $req->tav_jarak,
            'tav_p' => $tav_p,
            'tav_add' => $tav_add,
            'tav_jum' => $tav_jum,
            'tav_bjenis' => $tav_bjenis,
            'tav_total' => $tav_total,
            'tbv_dia' => $req->tbv_dia,
            'tbv_jarak' => $req->tbv_jarak,
            'tbv_p' => $tbv_p,
            'tbv_add' => $tbv_add,
            'tbv_jum' => $tbv_jum,
            'tbv_bjenis' => $tbv_bjenis,
            'tbv_total' => $tbv_total,
            'tah_dia' => $req->tah_dia,
            'tah_jarak' => $req->tah_jarak,
            'tah_p' => $tah_p,
            'tah_add' => $tah_add,
            'tah_jum' => $tah_jum,
            'tah_bjenis' => $tah_bjenis,
            'tah_total' => $tah_total,
            'tbh_dia' => $req->tbh_dia,
            'tbh_jarak' => $req->tbh_jarak,
            'tbh_p' => $tbh_p,
            'tbh_add' => $tbh_add,
            'tbh_jum' => $tbh_jum,
            'tbh_bjenis' => $tbh_bjenis,
            'tbh_total' => $tbh_total,
            'tp_dia' => $req->tp_dia,
            'tp_jum' => $req->tp_jum,
            'tp_p' => $tp_p,
            'tp_total' => $tp_total,
            'v_besi' => $v_besi,
            'v_beton' => $v_beton,
            'v_bb' => $v_bb,
            'v_galian' => $v_galian,
            'v_lc' => $v_lc,
            'v_pasir' => $v_pasir,
        ];
        // dd($req);
        tos1footplat::insert($hasil);
        return redirect('/target');
    }

    public function del_tos12($id)
    {
        $post = tos1footplat::all()->where('id_tos12', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos12(Request $req)
    {
        //Koefisien
        $lc = 0.05;
        $pasir = 0.05;
        $OH_dia = 0.64;
        // Statis
        $type = $req['type'];
        $dfp_l = $req['dfp_l'];
        $dfp_p = $req['dfp_p'];
        $dfp_t = $req['dfp_t'];
        $level_mta = $req['level_MTA'];
        $jumlah = $req['jumlah'];
        $tav_dia = $req['tav_dia'];
        $tav_jarak = $req['tav_jarak'];
        $tbv_dia = $req['tbv_dia'];
        $tbv_jarak = $req['tbv_jarak'];
        $tbh_dia = $req['tbh_dia'];
        $tbh_jarak = $req['tbh_jarak'];
        $tah_dia = $req['tah_dia'];
        $tah_jarak = $req['tah_jarak'];
        $tp_dia = $req['tp_dia'];
        $tp_jum = $req['tp_jum'];
        // Dinamis
        $tav_p = $dfp_p;
        $tav_add = ($dfp_t + (8 * $tav_dia * 0.001)) * 2;
        $tav_jum = ceil(($dfp_l / ($tav_jarak / 1000)) + 1);
        $tav_bjenis = 0.006165 * $tav_dia * $tav_dia;
        $tav_total = ((($tav_p + $tav_add) * $tav_jum) * $tav_bjenis) * $jumlah;
        $tbv_p = $dfp_p;
        $tbv_add = ($dfp_t + (8 * $tbv_dia * 0.001)) * 2;
        $tbv_jum = ceil(($dfp_l / ($tbv_jarak / 1000)) + 1);
        $tbv_bjenis = 0.006165 * $tbv_dia * $tbv_dia;
        $tbv_total = ((($tbv_p + $tbv_add) * $tbv_jum) * $tbv_bjenis) * $jumlah;
        $tah_p = $dfp_p;
        $tah_add = ($dfp_t + (8 * $tah_dia * 0.001)) * 2;
        $tah_jum = ceil(($dfp_l / ($tah_jarak / 1000)) + 1);
        $tah_bjenis = 0.006165 * $tah_dia * $tah_dia;
        $tah_total = ((($tah_p + $tah_add) * $tah_jum) * $tah_bjenis) * $jumlah;
        $tbh_p = $dfp_p;
        $tbh_add = ($dfp_t + (8 * $tbh_dia * 0.001)) * 2;
        $tbh_jum = ceil(($dfp_l / ($tbh_jarak / 1000)) + 1);
        $tbh_bjenis = 0.006165 * $tbh_dia * $tbh_dia;
        $tbh_total = ((($tbh_p + $tbh_add) * $tbh_jum) * $tbh_bjenis) * $jumlah;
        $tp_p = ((($dfp_l + $dfp_p) * 2) + ($OH_dia * 1.5) * 4) * $tp_jum;
        $tp_total = (0.006165 * $tbh_dia * $tbh_dia * $tp_p) * $jumlah;
        $v_besi = $tbh_total + $tbv_total + $tah_total + $tav_total + $tp_total;
        $v_beton = (($dfp_l * $dfp_p) * $dfp_t) * $jumlah;
        $v_bb = ($dfp_p + $dfp_l) * 2 * 0.4 * $jumlah;
        $v_galian = ($dfp_p * $dfp_l) * ($level_mta + $lc + $pasir) * $jumlah;
        $v_lc = ($dfp_p * $dfp_l) * $lc * $jumlah;
        $v_pasir = ($dfp_l * $dfp_p) * $jumlah;
        //dd($req);
        $user = tos1footplat::all()->where("id_tos11", $req->idt)->first()->update([
            'type' => $req->type,
            'dfp_l' => $req->dfp_l,
            'dfp_p' => $req->dfp_p,
            'dfp_t' => $req->dfp_t,
            'level_mta' => $req->level_mta,
            'jumlah' => $req->jumlah,
            'tav_dia' => $req->tav_dia,
            'tav_jarak' => $req->tav_jarak,
            'tav_p' => $tav_p,
            'tav_add' => $tav_add,
            'tav_jum' => $tav_jum,
            'tav_bjenis' => $tav_bjenis,
            'tav_total' => $tav_total,
            'tbv_dia' => $req->tbv_dia,
            'tbv_jarak' => $req->tbv_jarak,
            'tbv_p' => $tbv_p,
            'tbv_add' => $tbv_add,
            'tbv_jum' => $tbv_jum,
            'tbv_bjenis' => $tbv_bjenis,
            'tbv_total' => $tbv_total,
            'tah_dia' => $req->tah_dia,
            'tah_jarak' => $req->tah_jarak,
            'tah_p' => $tah_p,
            'tah_add' => $tah_add,
            'tah_jum' => $tah_jum,
            'tah_bjenis' => $tah_bjenis,
            'tah_total' => $tah_total,
            'tbh_dia' => $req->tbh_dia,
            'tbh_jarak' => $req->tbh_jarak,
            'tbh_p' => $tbh_p,
            'tbh_add' => $tbh_add,
            'tbh_jum' => $tbh_jum,
            'tbh_bjenis' => $tbh_bjenis,
            'tbh_total' => $tbh_total,
            'tp_dia' => $req->tp_dia,
            'tp_jum' => $req->tp_jum,
            'tp_p' => $tp_p,
            'tp_total' => $tp_total,
            'v_besi' => $v_besi,
            'v_beton' => $v_beton,
            'v_bb' => $v_bb,
            'v_galian' => $v_galian,
            'v_lc' => $v_lc,
            'v_pasir' => $v_pasir,

        ]);
        return redirect('/target');
    }

    // Tos 1 Pump Room
    public function in_tos13(Request $req)
    {
        //d/d($req);
        //Koefisien
        $lc = 0.05;
        $pasir = 0.05;
        $OH_dia = 0.64;
        // Statis
        $type = $req['type'];
        $dfp_l = $req['dfp_l'];
        $dfp_p = $req['dfp_p'];
        $dfp_t = $req['dfp_t'];
        $level_mta = $req['level_MTA'];
        $jumlah = $req['jumlah'];
        $tav_dia = $req['tav_dia'];
        $tav_jarak = $req['tav_jarak'];
        $tbv_dia = $req['tbv_dia'];
        $tbv_jarak = $req['tbv_jarak'];
        $tbh_dia = $req['tbh_dia'];
        $tbh_jarak = $req['tbh_jarak'];
        $tah_dia = $req['tah_dia'];
        $tah_jarak = $req['tah_jarak'];
        $tp_dia = $req['tp_dia'];
        $tp_jum = $req['tp_jum'];
        // Dinamis
        $tav_p = $dfp_p;
        $tav_add = ($dfp_t + (8 * $tav_dia * 0.001)) * 2;
        $tav_jum = ceil(($dfp_l / ($tav_jarak / 1000)) + 1);
        $tav_bjenis = 0.006165 * $tav_dia * $tav_dia;
        $tav_total = ((($tav_p + $tav_add) * $tav_jum) * $tav_bjenis) * $jumlah;
        $tbv_p = $dfp_p;
        $tbv_add = ($dfp_t + (8 * $tbv_dia * 0.001)) * 2;
        $tbv_jum = ceil(($dfp_l / ($tbv_jarak / 1000)) + 1);
        $tbv_bjenis = 0.006165 * $tbv_dia * $tbv_dia;
        $tbv_total = ((($tbv_p + $tbv_add) * $tbv_jum) * $tbv_bjenis) * $jumlah;
        $tah_p = $dfp_p;
        $tah_add = ($dfp_t + (8 * $tah_dia * 0.001)) * 2;
        $tah_jum = ceil(($dfp_l / ($tah_jarak / 1000)) + 1);
        $tah_bjenis = 0.006165 * $tah_dia * $tah_dia;
        $tah_total = ((($tah_p + $tah_add) * $tah_jum) * $tah_bjenis) * $jumlah;
        $tbh_p = $dfp_p;
        $tbh_add = ($dfp_t + (8 * $tbh_dia * 0.001)) * 2;
        $tbh_jum = ceil(($dfp_l / ($tbh_jarak / 1000)) + 1);
        $tbh_bjenis = 0.006165 * $tbh_dia * $tbh_dia;
        $tbh_total = ((($tbh_p + $tbh_add) * $tbh_jum) * $tbh_bjenis) * $jumlah;
        $tp_p = ((($dfp_l + $dfp_p) * 2) + ($OH_dia * 1.5) * 4) * $tp_jum;
        $tp_total = (0.006165 * $tbh_dia * $tbh_dia * $tp_p) * $jumlah;
        $v_besi = $tbh_total + $tbv_total + $tah_total + $tav_total + $tp_total;
        $v_beton = (($dfp_l * $dfp_p) * $dfp_t) * $jumlah;
        $v_bb = ($dfp_p + $dfp_l) * 2 * 0.4 * $jumlah;
        $v_galian = ($dfp_p * $dfp_l) * ($level_mta + $lc + $pasir) * $jumlah;
        $v_lc = ($dfp_p * $dfp_l) * $lc * $jumlah;
        $v_pasir = ($dfp_l * $dfp_p) * $jumlah;

        // dd($req);

        $hasil = [
            'type' => $req->type,
            'dfp_l' => $req->dfp_l,
            'dfp_p' => $req->dfp_p,
            'dfp_t' => $req->dfp_t,
            'level_mta' => $req->level_mta,
            'jumlah' => $req->jumlah,
            'tav_dia' => $req->tav_dia,
            'tav_jarak' => $req->tav_jarak,
            'tav_p' => $tav_p,
            'tav_add' => $tav_add,
            'tav_jum' => $tav_jum,
            'tav_bjenis' => $tav_bjenis,
            'tav_total' => $tav_total,
            'tbv_dia' => $req->tbv_dia,
            'tbv_jarak' => $req->tbv_jarak,
            'tbv_p' => $tbv_p,
            'tbv_add' => $tbv_add,
            'tbv_jum' => $tbv_jum,
            'tbv_bjenis' => $tbv_bjenis,
            'tbv_total' => $tbv_total,
            'tah_dia' => $req->tah_dia,
            'tah_jarak' => $req->tah_jarak,
            'tah_p' => $tah_p,
            'tah_add' => $tah_add,
            'tah_jum' => $tah_jum,
            'tah_bjenis' => $tah_bjenis,
            'tah_total' => $tah_total,
            'tbh_dia' => $req->tbh_dia,
            'tbh_jarak' => $req->tbh_jarak,
            'tbh_p' => $tbh_p,
            'tbh_add' => $tbh_add,
            'tbh_jum' => $tbh_jum,
            'tbh_bjenis' => $tbh_bjenis,
            'tbh_total' => $tbh_total,
            'tp_dia' => $req->tp_dia,
            'tp_jum' => $req->tp_jum,
            'tp_p' => $tp_p,
            'tp_total' => $tp_total,
            'v_besi' => $v_besi,
            'v_beton' => $v_beton,
            'v_bb' => $v_bb,
            'v_galian' => $v_galian,
            'v_lc' => $v_lc,
            'v_pasir' => $v_pasir,
        ];
        // dd($req);
        tos1pumproom::insert($hasil);
        return redirect('/target');
    }

    public function del_tos13($id)
    {
        $post = tos1pumproom::all()->where('id_tos13', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos13(Request $req)
    {
        // dd($req);
        //Koefisien
        $lc = 0.05;
        $pasir = 0.05;
        $OH_dia = 0.64;
        // Statis
        $type = $req['type'];
        $dfp_l = $req['dfp_l'];
        $dfp_p = $req['dfp_p'];
        $dfp_t = $req['dfp_t'];
        $level_mta = $req['level_MTA'];
        $jumlah = $req['jumlah'];
        $tav_dia = $req['tav_dia'];
        $tav_jarak = $req['tav_jarak'];
        $tbv_dia = $req['tbv_dia'];
        $tbv_jarak = $req['tbv_jarak'];
        $tbh_dia = $req['tbh_dia'];
        $tbh_jarak = $req['tbh_jarak'];
        $tah_dia = $req['tah_dia'];
        $tah_jarak = $req['tah_jarak'];
        $tp_dia = $req['tp_dia'];
        $tp_jum = $req['tp_jum'];
        // Dinamis
        $tav_p = $dfp_p;
        $tav_add = ($dfp_t + (8 * $tav_dia * 0.001)) * 2;
        $tav_jum = ceil(($dfp_l / ($tav_jarak / 1000)) + 1);
        $tav_bjenis = 0.006165 * $tav_dia * $tav_dia;
        $tav_total = ((($tav_p + $tav_add) * $tav_jum) * $tav_bjenis) * $jumlah;
        $tbv_p = $dfp_p;
        $tbv_add = ($dfp_t + (8 * $tbv_dia * 0.001)) * 2;
        $tbv_jum = ceil(($dfp_l / ($tbv_jarak / 1000)) + 1);
        $tbv_bjenis = 0.006165 * $tbv_dia * $tbv_dia;
        $tbv_total = ((($tbv_p + $tbv_add) * $tbv_jum) * $tbv_bjenis) * $jumlah;
        $tah_p = $dfp_p;
        $tah_add = ($dfp_t + (8 * $tah_dia * 0.001)) * 2;
        $tah_jum = ceil(($dfp_l / ($tah_jarak / 1000)) + 1);
        $tah_bjenis = 0.006165 * $tah_dia * $tah_dia;
        $tah_total = ((($tah_p + $tah_add) * $tah_jum) * $tah_bjenis) * $jumlah;
        $tbh_p = $dfp_p;
        $tbh_add = ($dfp_t + (8 * $tbh_dia * 0.001)) * 2;
        $tbh_jum = ceil(($dfp_l / ($tbh_jarak / 1000)) + 1);
        $tbh_bjenis = 0.006165 * $tbh_dia * $tbh_dia;
        $tbh_total = ((($tbh_p + $tbh_add) * $tbh_jum) * $tbh_bjenis) * $jumlah;
        $tp_p = ((($dfp_l + $dfp_p) * 2) + ($OH_dia * 1.5) * 4) * $tp_jum;
        $tp_total = (0.006165 * $tbh_dia * $tbh_dia * $tp_p) * $jumlah;
        $v_besi = $tbh_total + $tbv_total + $tah_total + $tav_total + $tp_total;
        $v_beton = (($dfp_l * $dfp_p) * $dfp_t) * $jumlah;
        $v_bb = ($dfp_p + $dfp_l) * 2 * 0.4 * $jumlah;
        $v_galian = ($dfp_p * $dfp_l) * ($level_mta + $lc + $pasir) * $jumlah;
        $v_lc = ($dfp_p * $dfp_l) * $lc * $jumlah;
        $v_pasir = ($dfp_l * $dfp_p) * $jumlah;
        //dd($req);
        $user = tos1pumproom::all()->where("id_tos13", $req->idt)->first()->update([
            'type' => $req->type,
            'dfp_l' => $req->dfp_l,
            'dfp_p' => $req->dfp_p,
            'dfp_t' => $req->dfp_t,
            'level_mta' => $req->level_mta,
            'jumlah' => $req->jumlah,
            'tav_dia' => $req->tav_dia,
            'tav_jarak' => $req->tav_jarak,
            'tav_p' => $tav_p,
            'tav_add' => $tav_add,
            'tav_jum' => $tav_jum,
            'tav_bjenis' => $tav_bjenis,
            'tav_total' => $tav_total,
            'tbv_dia' => $req->tbv_dia,
            'tbv_jarak' => $req->tbv_jarak,
            'tbv_p' => $tbv_p,
            'tbv_add' => $tbv_add,
            'tbv_jum' => $tbv_jum,
            'tbv_bjenis' => $tbv_bjenis,
            'tbv_total' => $tbv_total,
            'tah_dia' => $req->tah_dia,
            'tah_jarak' => $req->tah_jarak,
            'tah_p' => $tah_p,
            'tah_add' => $tah_add,
            'tah_jum' => $tah_jum,
            'tah_bjenis' => $tah_bjenis,
            'tah_total' => $tah_total,
            'tbh_dia' => $req->tbh_dia,
            'tbh_jarak' => $req->tbh_jarak,
            'tbh_p' => $tbh_p,
            'tbh_add' => $tbh_add,
            'tbh_jum' => $tbh_jum,
            'tbh_bjenis' => $tbh_bjenis,
            'tbh_total' => $tbh_total,
            'tp_dia' => $req->tp_dia,
            'tp_jum' => $req->tp_jum,
            'tp_p' => $tp_p,
            'tp_total' => $tp_total,
            'v_besi' => $v_besi,
            'v_beton' => $v_beton,
            'v_bb' => $v_bb,
            'v_galian' => $v_galian,
            'v_lc' => $v_lc,
            'v_pasir' => $v_pasir,

        ]);
        return redirect('/target');
    }

    // Tos 1 Batu Kali
    public function in_tos14(Request $req)
    {

        $nama = $req['nama'];
        $bentuk = $req['bentuk'];
        $panjang = $req['panjang'];
        $b = $req['B'];
        $b_ = $req['B_'];
        $h = $req['H'];
        $p = $req['panjang'];
        $la = $p * $b;
        $v_bk = $p * $b * $p;
        $p_urug = $la;
        $galian = $v_bk;
        $timbunan = ($galian - $v_bk);

        $hasil = [
            'nama' => $nama,
            'bentuk' => $bentuk,
            'panjang' => $panjang,
            'b' => $b,
            'b_' => $b_,
            'h' => $h,
            'p' => $p,
            'la' => $la,
            'v_bk' => $v_bk,
            'pasir_u' => $p_urug,
            'galian' => $galian,
            'timbunan' => $timbunan
        ];
        tos1batukali::insert($hasil);
        return redirect('/target');
    }

    public function del_tos14($id)
    {
        $post = tos1pumproom::all()->where('id_tos14', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos14(Request $req)
    {
        // dd($req);
        $nama = $req['nama'];
        $bentuk = $req['bentuk'];
        $panjang = $req['panjang'];
        $b = $req['b'];
        $b_ = $req['b_'];
        $h = $req['h'];
        $p = $req['panjang'];
        $la = $p * $b;
        $v_bk = $p * $b * $p;
        $p_urug = $la;
        $galian = $v_bk;
        $timbunan = ($galian - $v_bk);

        $user = tos1batukali::all()->where("id_tos14", $req->idt)->first()->update([
            'nama' => $nama,
            'bentuk' => $bentuk,
            'panjang' => $panjang,
            'b' => $b,
            'b_' => $b_,
            'h' => $h,
            'p' => $p,
            'la' => $la,
            'v_bk' => $v_bk,
            'pasir_u' => $p_urug,
            'galian' => $galian,
            'timbunan' => $timbunan
        ]);
        return redirect('/target');
    }


     // Tos 2 Pedestal
     public function in_tos21(Request $req)
     {
        // $tipe_kolom = $req->tipe_kolom;
        // $tebal_plat = $req->tebal_plat;
        // $jum_kolom = $req->jum_kolom;
        // $footplat_type = $req->footplat_type;
        // $pk_sengkang_qty = $req->pk_sengkang_qty;

        // $hasil = [
        //     'tipe_kolom' => $req->tipe_kolom,
        //     'tebal_plat' => $req->tebal_plat,
        //     'jum_kolom' => $req->jum_kolom,
        //     'footplat_type' => $req->footplat_type,
        //     'pk_sengkang_qty' => $req->pk_sengkang_qty,
        // ];
        
        // tos2pedestal::insert($hasil);

        $tes = tos2pedestal::join('tos2datakolom', 'tos2pedestal.tipe_kolom', '=', 'tos2datakolom.nama')->limit(1)->get();
        // foreach ($tes as $row) {
        //     echo $row['nama'];
        // }

        dd($tes);
        // return redirect('/target');
     }
 
     public function del_tos21($id)
     {
         $post = tos2pedestal::all()->where('id_tos24', $id)->each->delete();
         return redirect('/target');
     }
 
     public function edit_tos21(Request $req)
     {
         $coba = tos2pedestal::all()->detil();

        //  dd($coba);
         $user = tos2lewatan::all()->where("id_tos24", $req->idt)->first()->update([
             'dia' => $req->dia,
             'ls' => $req->ls,
 
         ]);
         return redirect('/target');
     }

    // Tos 2 kolome Pedestal
    public function in_tos22(Request $req)
    {

        // dd($req);
        $tipe_kolom = $req->tipe_kolom;
        $tebal_plat = $req->tebal_plat;
        $jum_kolom = $req->jum_kolom;
        $footplat_type = $req->footplat_type;
        $pk_sengkang_qty = $req->pk_sengkang_qty;

        $hasil = [
            'tipe_kolom' => $req->tipe_kolom,
            'tebal_plat' => $req->tebal_plat,
            'jum_kolom' => $req->jum_kolom,
            'footplat_type' => $req->footplat_type,
            'pk_sengkang_qty' => $req->pk_sengkang_qty,
        ];

        tos2kolompedestal::insert($hasil);
        return redirect('/target');
    }

    public function del_tos22($id)
    {
        $post = tos2kolompedestal::all()->where('id_tos22', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos22(Request $req)
    {
        //dd($req);
        $user = tos2kolompedestal::all()->where("id_tos22", $req->idt)->first()->update([
            'dia' => $req->dia,
            'ls' => $req->ls,

        ]);
        return redirect('/target');
    }


    // Tos 2 Data Kolom
    public function in_tos26(Request $req)
    {
        // dd($req);
        $hasil = [
            'nama' => $req->nama,
            'bentuk' => $req->bentuk,
            'dimensi_l' => $req->dimensi_l,
            'dimensi_p' => $req->dimensi_p,
            'tebal_selimut' => $req->tebal_selimut,
            'tulpok_dia' => $req->tulpok_dia,
            'tulpok_jum' => $req->tulpok_jum,
            'tulseng_dia_tumpuan' => $req->tulseng_dia_tumpuan,
            'tulseng_dia_lapangan' => $req->tulseng_dia_lapangan,
            'tulseng_dia_jaraklap' => $req->tulseng_dia_jaraklap,
            'tulseng_dia_jaraktump' => $req->tulseng_dia_jaraktump,
            'thtump_dia' => $req->thtump_dia,
            'thtump_jarak' => $req->thtump_jarak,
            'thlap_dia' => $req->thlap_dia,
            'thlap_jarak' => $req->thlap_jarak,
            'tvtump_dia' => $req->tvtump_dia,
            'tvtump_jarak' => $req->tvtump_jarak,
            'tvlap_dia' => $req->tvlap_dia,
            'tvlap_jarak' => $req->tvlap_jarak
        ];
        // dd($req);
        tos2datakolom::insert($hasil);
        return redirect('/target');
    }

    public function del_tos26($id)
    {
        $post = tos2datakolom::all()->where('id_tos26', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos26(Request $req)
    {
        //dd($req);
        $user = tos2datakolom::all()->where("id_tos26", $req->idt)->first()->update([
            'nama' => $req->nama,
            'bentuk' => $req->bentuk,
            'dimensi_l' => $req->dimensi_l,
            'dimensi_p' => $req->dimensi_p,
            'tebal_selimut' => $req->tebal_selimut,
            'tulpok_dia' => $req->tulpok_dia,
            'tulpok_jum' => $req->tulpok_jum,
            'tulseng_dia_tumpuan' => $req->tulseng_dia_tumpuan,
            'tulseng_dia_lapangan' => $req->tulseng_dia_lapangan,
            'tulseng_dia_jaraklap' => $req->tulseng_dia_jaraklap,
            'tulseng_dia_jaraktump' => $req->tulseng_dia_jaraktump,
            'thtump_dia' => $req->thtump_dia,
            'thtump_jarak' => $req->thtump_jarak,
            'thlap_dia' => $req->thlap_dia,
            'thlap_jarak' => $req->thlap_jarak,
            'tvtump_dia' => $req->tvtump_dia,
            'tvtump_jarak' => $req->tvtump_jarak,
            'tvlap_dia' => $req->tvlap_dia,
            'tvlap_jarak' => $req->tvlap_jarak

        ]);
        return redirect('/target');
    }

    // Tos 2 Lewatan
    public function in_tos24(Request $req)
    {
        $hasil = [
            'dia' => $req->dia,
            'ls' => $req->ls
        ];
        // dd($req);
        tos2lewatan::insert($hasil);
        return redirect('/target');
    }

    public function del_tos24($id)
    {
        $post = tos2lewatan::all()->where('id_tos24', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos24(Request $req)
    {
        //dd($req);
        $user = tos2lewatan::all()->where("id_tos24", $req->idt)->first()->update([
            'dia' => $req->dia,
            'ls' => $req->ls,

        ]);
        return redirect('/target');
    }

    // tos 2 data footplat
    public function in_tos25(Request $req)
    {
        $hasil = [
            'nama' => $req->nama,
            'b' => $req->b,
            'h' => $req->h,
            't' => $req->t,

        ];
        // dd($req);
        tos2datafootplat::insert($hasil);
        return redirect('/target');
    }

    public function del_tos25($id)
    {
        $post = tos2datafootplat::all()->where('id_tos25', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos25(Request $req)
    {
        // dd($req);
        $user = tos2datafootplat::all()->where("id_tos25", $req->idt)->first()->update([
            'nama' => $req->nama,
            'b' => $req->b,
            'h' => $req->h,
            't' => $req->t,

        ]);
        return redirect('/target');
    }

    // Tos 3 Data Kolom
    public function in_tos31(Request $req)
    {
        // dd($req);
        $hasil = [
            'nama' => $req->nama,
            'bentuk' => $req->bentuk,
            'dimensi_l' => $req->dimensi_l,
            'dimensi_p' => $req->dimensi_p,
            'tebal_selimut' => $req->tebal_selimut,
            'tulpok_dia' => $req->tulpok_dia,
            'tulpok_jum' => $req->tulpok_jum,
            'tulseng_dia_tumpuan' => $req->tulseng_dia_tumpuan,
            'tulseng_dia_lapangan' => $req->tulseng_dia_lapangan,
            'tulseng_dia_jaraklap' => $req->tulseng_dia_jaraklap,
            'tulseng_dia_jaraktump' => $req->tulseng_dia_jaraktump,
            'thtump_dia' => $req->thtump_dia,
            'thtump_jarak' => $req->thtump_jarak,
            'thlap_dia' => $req->thlap_dia,
            'thlap_jarak' => $req->thlap_jarak,
            'tvtump_dia' => $req->tvtump_dia,
            'tvtump_jarak' => $req->tvtump_jarak,
            'tvlap_dia' => $req->tvlap_dia,
            'tvlap_jarak' => $req->tvlap_jarak
        ];
        // dd($req);
        tos3data::insert($hasil);
        return redirect('/target');
    }

    public function del_tos31($id)
    {
        $post = tos3data::all()->where('id_tos31', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos31(Request $req)
    {
        //dd($req);
        $user = tos3data::all()->where("id_tos31", $req->idt)->first()->update([
            'nama' => $req->nama,
            'bentuk' => $req->bentuk,
            'dimensi_l' => $req->dimensi_l,
            'dimensi_p' => $req->dimensi_p,
            'tebal_selimut' => $req->tebal_selimut,
            'tulpok_dia' => $req->tulpok_dia,
            'tulpok_jum' => $req->tulpok_jum,
            'tulseng_dia_tumpuan' => $req->tulseng_dia_tumpuan,
            'tulseng_dia_lapangan' => $req->tulseng_dia_lapangan,
            'tulseng_dia_jaraklap' => $req->tulseng_dia_jaraklap,
            'tulseng_dia_jaraktump' => $req->tulseng_dia_jaraktump,
            'thtump_dia' => $req->thtump_dia,
            'thtump_jarak' => $req->thtump_jarak,
            'thlap_dia' => $req->thlap_dia,
            'thlap_jarak' => $req->thlap_jarak,
            'tvtump_dia' => $req->tvtump_dia,
            'tvtump_jarak' => $req->tvtump_jarak,
            'tvlap_dia' => $req->tvlap_dia,
            'tvlap_jarak' => $req->tvlap_jarak

        ]);
        return redirect('/target');
    }

    // Tos Ground
    public function in_tos32(Request $req)
    {
       $tipe_kolom = $req->tipe_kolom;
       $tebal_plat = $req->tebal_plat;
       $jum_kolom = $req->jum_kolom;
       $pk_sengkang_qty = $req->pk_sengkang_qty;

       $hasil = [
           'tipe_kolom' => $req->tipe_kolom,
           'tebal_plat' => $req->tebal_plat,
           'jum_kolom' => $req->jum_kolom,
           'pk_sengkang_qty' => $req->pk_sengkang_qty,
       ];
       
      tos3ground::insert($hasil);
       return redirect('/target');
    }

    public function del_tos32($id)
    {
        $post = tos3ground::all()->where('id_tos24', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos32(Request $req)
    {
        $coba =tos3ground::all()->detil();

       //  dd($coba);
        $user = tos2lewatan::all()->where("id_tos24", $req->idt)->first()->update([
            'dia' => $req->dia,
            'ls' => $req->ls,

        ]);
        return redirect('/target');
    }

    // Tos Ground
    public function in_tos33(Request $req)
    {
       $tipe_kolom = $req->tipe_kolom;
       $tebal_plat = $req->tebal_plat;
       $jum_kolom = $req->jum_kolom;
       $pk_sengkang_qty = $req->pk_sengkang_qty;

       $hasil = [
           'tipe_kolom' => $req->tipe_kolom,
           'tebal_plat' => $req->tebal_plat,
           'jum_kolom' => $req->jum_kolom,
           'pk_sengkang_qty' => $req->pk_sengkang_qty,
       ];
       
       tos3pumproom::insert($hasil);
       return redirect('/target');
    }

    public function del_tos33($id)
    {
        $post = tos3pumproom::all()->where('id_tos24', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos33(Request $req)
    {
        $coba = tos3pumproom::all()->detil();

       //  dd($coba);
        $user = tos2lewatan::all()->where("id_tos24", $req->idt)->first()->update([
            'dia' => $req->dia,
            'ls' => $req->ls,

        ]);
        return redirect('/target');
    }


     // Tos 3 Lewatan
     public function in_tos35(Request $req)
     {
         $hasil = [
             'dia' => $req->dia,
             'ls' => $req->ls
         ];
         // dd($req);
         tos3lewatan::insert($hasil);
         return redirect('/target');
     }
 
     public function del_tos35($id)
     {
         $post = tos3lewatan::all()->where('id_tos35', $id)->each->delete();
         return redirect('/target');
     }
 
     public function edit_tos35(Request $req)
     {
         //dd($req);
         $user = tos3lewatan::all()->where("id_tos35", $req->idt)->first()->update([
             'dia' => $req->dia,
             'ls' => $req->ls,
 
         ]);
         return redirect('/target');
     }
}
