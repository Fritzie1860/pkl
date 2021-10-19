<?php

namespace App\Http\Controllers;

use App\Models\tos1footplat;
use App\Models\tos1oandh;
use App\Models\tos1pumproom;
use App\Models\tos1batukali;
use App\Models\tos2lewatan;
use Illuminate\Http\Request;

class TosController extends Controller{

    public function index()
    {
        $Tos11 = tos1oandh::all();
        $Tos12 = tos1footplat::all();
        $Tos13 = tos1pumproom::all();
        $Tos14 = tos1batukali::all();
        $Tos24 = tos2lewatan::all();

        return view('detil_project', ['Tos11' => $Tos11, 'Tos12' => $Tos12, 'Tos13' => $Tos13, 'Tos14' => $Tos14, 
        'Tos24' => $Tos24]);
    }

    // Tos 1 OH
    public function in_tos11(Request $req){
        $hasil = [
            'dia' => $req->dia,
            'p' => $req->p
        ];
        // dd($req);
        tos1oandh::insert($hasil);
        return redirect('/target');
    }

    public function del_tos11($id){
        $post = tos1oandh::all()->where('id_tos11', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos11(Request $req){
        //dd($req);
        $user = tos1oandh::all()->where("id_tos11", $req->idt)->first()->update([
            'dia' => $req->dia,
            'p' => $req->p,

        ]);
        return redirect('/target');
    }

    // Tos 1 Foot Plat
    public function in_tos12(Request $req){
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

    public function del_tos12 ($id) {
        $post = tos1footplat::all()->where('id_tos12', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos12(Request $req){
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
    public function in_tos13(Request $req){   
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

    public function del_tos13 ($id) {
        $post = tos1pumproom::all()->where('id_tos13', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos13(Request $req){   
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
    public function in_tos14(Request $req){

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
            'panjang' =>$panjang,
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

    public function del_tos14 ($id) {
        $post = tos1pumproom::all()->where('id_tos14', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos14(Request $req){   
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
            'panjang' =>$panjang,
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

    // Tos 2 Lewatan
    public function in_tos24(Request $req){
        $hasil = [
            'dia' => $req->dia,
            'ls' => $req->ls
        ];
        // dd($req);
        tos2lewatan::insert($hasil);
        return redirect('/target');
    }

    public function del_tos24($id){
        $post = tos2lewatan::all()->where('id_tos24', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos24(Request $req){
        //dd($req);
        $user = tos2lewatan::all()->where("id_tos24", $req->idt)->first()->update([
            'dia' => $req->dia,
            'ls' => $req->ls,

        ]);
        return redirect('/target');
    }
    
}
