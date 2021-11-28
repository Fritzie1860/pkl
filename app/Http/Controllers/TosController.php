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

    // public function index($id)
    // {
    //     $Tos11 = tos1oandh::all()->where('project_id', $id);
    //     $Tos12 = tos1footplat::all()->where('project_id', $id);
    //     $Tos13 = tos1pumproom::all()->where('project_id', $id);
    //     $Tos14 = tos1batukali::all()->where('project_id', $id);

    //     $pedes = new tos2pedestal();
    //     $kopedes = new tos2kolompedestal();


    //     // dd($coba->detil());

    //     $Tos21 = $pedes->detil($id);
    //     $Tos22 = $kopedes->detil($id);
    //     $Tos23 = tos2summary::all()->where('project_id', $id);
    //     $Tos24 = tos2lewatan::all()->where('project_id', $id);
    //     $Tos25 = tos2datafootplat::all()->where('project_id', $id);
    //     $Tos26 = tos2datakolom::all()->where('project_id', $id);
    //     $sum_pedes = $pedes->summarry($id);
    //     $sum_kopedes = $kopedes->summarry($id);

    //     $ground = new tos3ground();
    //     $pumproom = new tos3pumproom();

    //     $sum_ground = $ground->summarry($id);
    //     $sum_pm = $pumproom->summarry($id);


    //     $tos31 = tos3data::all()->where('project_id', $id);
    //     $tos32 = $ground->detil($id);
    //     $tos33 = $pumproom->detil($id);
    //     $tos34 = tos3summary::all()->where('project_id', $id);
    //     $tos35 = tos3lewatan::all()->where('project_id', $id);



    //     return view('detil_project', [
    //         'Tos11' => $Tos11, 'Tos12' => $Tos12, 'Tos13' => $Tos13, 'Tos14' => $Tos14,
    //         'Tos21' => $Tos21, 'Tos22' => $Tos22, 'Tos23' => $Tos23,
    //         'Tos24' => $Tos24, 'Tos25' => $Tos25, 'Tos26' => $Tos26,
    //         'Tos31' => $tos31, 'Tos32' =>  $tos32, 'Tos33' => $tos33,
    //         'Tos34' => $tos34, 'Tos35' => $tos35, 'sum_pedes' => $sum_pedes,
    //         'sum_kopedes' => $sum_kopedes, 'sum_ground' => $sum_ground, 'sum_pm' => $sum_pm
    //     ]);
    // }

    public function index(Request $req)
    {
        $id = $req->cari;
        $Tos11 = tos1oandh::all()->where('project_id',$req->cari);
        $Tos12 = tos1footplat::all()->where('project_id',$req->cari);
        $Tos13 = tos1pumproom::all()->where('project_id',$req->cari);
        $Tos14 = tos1batukali::all()->where('project_id',$req->cari);

        $pedes = new tos2pedestal();
        $kopedes = new tos2kolompedestal();


        // dd($coba->detil());

        $Tos21 = $pedes->detil($id);
        $Tos22 = $kopedes->detil($id);
        $Tos23 = tos2summary::all()->where('project_id',$req->cari);
        $Tos24 = tos2lewatan::all()->where('project_id',$req->cari);
        $Tos25 = tos2datafootplat::all();
        $Tos26 = tos2datakolom::all();
        $sum_pedes = $pedes->summarry($id);
        $sum_kopedes = $kopedes->summarry($id);

        $ground = new tos3ground();
        $pumproom = new tos3pumproom();

        $sum_ground = $ground->summarry($id);
        $sum_pm = $pumproom->summarry($id);


        $tos31 = tos3data::all()->where('project_id',$req->cari);
        $tos32 = $ground->detil($id);
        $tos33 = $pumproom->detil($id);
        $tos34 = tos3summary::all()->where('project_id',$req->cari);
        $tos35 = tos3lewatan::all()->where('project_id',$req->cari);



        return view('detil_project', [   'cari' => $req->cari,
            'Tos11' => $Tos11, 'Tos12' => $Tos12, 'Tos13' => $Tos13, 'Tos14' => $Tos14,
            'Tos21' => $Tos21, 'Tos22' => $Tos22, 'Tos23' => $Tos23,
            'Tos24' => $Tos24, 'Tos25' => $Tos25, 'Tos26' => $Tos26,
            'Tos31' => $tos31, 'Tos32' =>  $tos32, 'Tos33' => $tos33,
            'Tos34' => $tos34, 'Tos35' => $tos35, 'sum_pedes' => $sum_pedes,
            'sum_kopedes' => $sum_kopedes, 'sum_ground' => $sum_ground, 'sum_pm' => $sum_pm
        ]);
    }

    public function hasil($id)
    {

        $pedes = new tos2pedestal();
        $kopedes = new tos2kolompedestal();


        // dd($coba->detil());

        $Tos21 = $pedes->detil();
        $Tos22 = $kopedes->detil();
        $summa = $pedes->summarry($id);
    dd($summa);
        // return view('hasil', [
        //     // 'Tos21' => $Tos21, 'Tos22' => $Tos22, 'Tos23' => $Tos23,
        //     // 'Tos24' => $Tos24, 'Tos25' => $Tos25, 'Tos26' => $Tos26
        //     'summary' => $summa
        // ]);
    }

    // Tos 1 OH
    public function in_tos11(Request $req)
    {
        // var_dump($req->cari);
        $hasil = [
            'project_id' => $req->cari,
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
            'project_id' => $req->cari,
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
            'project_id' => $req->cari,
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
        $tipe_kolom = $req->tipe_kolom;
        $tebal_plat = $req->tebal_plat;
        $jum_kolom = $req->jum_kolom;
        $footplat_type = $req->footplat_type;
        $pk_sengkang_qty = $req->pk_sengkang_qty;

        $datakol = tos2datakolom::all()->where('nama', $tipe_kolom);
        $datafoot = tos2datafootplat::all()->where('nama', $footplat_type);
        $datalewat = tos2lewatan::all()->where('dia', $datakol[1]['tulpok_dia']);
        // dd($datalewat);
        // echo $datalewat[]['ls'];

        $a = round((3.14 * $datakol[1]['dimensi_l']) + (6 * ($datakol[1]['tulseng_dia_tumpuan'] / 1000) * 2) - ($datakol[1]['tebal_selimut'] * 8), 2);
        $b = ceil((1.5 - $datafoot[0]['t']) / $datakol[1]['tulseng_dia_jaraktump'] * 0.25 + ($datalewat[1]['ls'] / $datakol[1]['tulseng_dia_jaraktump'] * 0.25)) + $pk_sengkang_qty;
        $b1 = round(0.25 * 3.14 * $datakol[1]['tulseng_dia_tumpuan'] * $datakol[1]['tulseng_dia_tumpuan'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round((3.14 * $datakol[1]['dimensi_l']) + (6 * ($datakol[1]['tulseng_dia_lapangan'] / 1000) * 2) - ($datakol[1]['tebal_selimut'] * 8), 2);
        $b = ceil(((1.5 - $datafoot[0]['t']) / $datakol[1]['tulseng_dia_jaraklap'] * 0.2) + ($datalewat[1]['ls'] / $datakol[1]['tulseng_dia_jaraklap'] * 0.2)) * $pk_sengkang_qty;
        $b2 = round(0.25 * 3.14 * $datakol[1]['tulseng_dia_lapangan'] * $datakol[1]['tulseng_dia_lapangan'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round((3.14 * $datakol[1]['dimensi_l']) + (6 * ($datakol[1]['tulseng_dia_tumpuan'] / 1000) * 2) - ($datakol[1]['tebal_selimut'] * 8), 2);
        $b = ceil((1.5 - $datafoot[0]['t']) / $datakol[1]['tulseng_dia_jaraktump'] * 0.25 + (round($datalewat[1]['ls'], 2) / $datakol[1]['tulseng_dia_jaraktump'] * 0.25)) + $pk_sengkang_qty;
        $b3 = round(0.25 * 3.14 * $datakol[1]['tulseng_dia_tumpuan'] * $datakol[1]['tulseng_dia_tumpuan'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round((6 * ($datakol[1]['tvlap_dia'] / 1000)) * 2 + (($datakol[1]['dimensi_p']) - (($datakol[1]['tebal_selimut']) * 2)), 2);
        $b = ceil($jum_kolom / $datakol[1]['tvlap_jarak'] * 0.2) * $pk_sengkang_qty;
        $b4 = round(0.25 * 3.14 * $datakol[1]['tvlap_dia'] * $datakol[1]['tvlap_dia'] * 0.00785 * $a * $b * $jum_kolom, 2);
        $b5 = round(0.25 * 3.14 * $datakol[1]['tvlap_dia'] * $datakol[1]['tvlap_dia'] * 0.00785 * ((round((6 * ($datakol[1]['tvlap_dia'] / 1000)) * 2 + (($datakol[1]['dimensi_p']) - (($datakol[1]['tebal_selimut']) * 2)), 2)) * (ceil((($jum_kolom) * 0.25) / $datakol[1]['tvlap_jarak']) + (1 * $pk_sengkang_qty))) * $jum_kolom, 2);

        $a = round(((($datakol[1]['thtump_dia'] / 1000) * 12) + ($datakol[1]['dimensi_p'] - $datakol[1]['tebal_selimut'] * 2) * 2), 2);
        $b = ceil($jum_kolom / $datakol[1]['thtump_jarak'] * 0.25) + $pk_sengkang_qty;
        $b6 = round(0.25 * 3.14 * $datakol[1]['thtump_dia'] * $datakol[1]['thtump_dia'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round(((($datakol[1]['thtump_dia'] / 1000) * 12) + ($datakol[1]['dimensi_p'] - $datakol[1]['tebal_selimut'] * 2) * 2), 2);
        $b = ceil($jum_kolom / $datakol[1]['thlap_jarak'] * 0.2) * $pk_sengkang_qty;
        $b7 = round(0.25 * 3.14 * $datakol[1]['thlap_dia'] * $datakol[1]['thlap_dia'] * 0.00785 * $a * $b * $jum_kolom, 2);
        // echo "$b1 .' '.$b2.' '.$b3.' '.$b4.' '.$b5.' '.$b6.' '.$b7 ";
        $tos22_tamp_berat =  $b1 + $b2 + $b3  + $b4  + $b5 + $b6 + $b7;

        $beton_bundar = 3.14 * (0.5 * $datakol[1]['dimensi_l']) * (0.5 * $datakol[1]['dimensi_l']) * $jum_kolom * (1.5 - $datafoot[0]['t']);
        $beton_kotak = ($datakol[1]['dimensi_l'] * $datakol[1]['dimensi_p'] * (1.5 - $datafoot[0]['t']) * $jum_kolom);

        $bekisting_bundar = (3.14 * $datakol[1]['dimensi_l']) * ((1.5 - $datafoot[0]['t']) - $tebal_plat) * $jum_kolom;
        $bekisting_kotak = (($datakol[1]['dimensi_l'] + $datakol[1]['dimensi_p']) * 2 * ((1.5 - $datafoot[0]['t']) - $tebal_plat)) * $jum_kolom;

        $timbunan = (($datafoot[0]['b'] * $datafoot[0]['h']) - ($datakol[1]['dimensi_l'] * $datakol[1]['dimensi_p'])) * ((1.5 - $datafoot[0]['t']) - $tebal_plat) * 1.2 * $jum_kolom;

       // besi  -->
        $besi = round(((0.25*3.14*$datakol[1]['tulpok_dia']*$datakol[1]['tulpok_dia']*0.007855)*$datakol[1]['tulpok_jum'] * ((28*($datakol[1]['tulpok_dia']/1000))+(8*($datakol[1]['tulpok_dia']/1000))
         +$datalewat[1]['ls']+$datafoot[0]['t']+(20*($datakol[1]['tulpok_dia']/1000))+(8*($datakol[1]['tulpok_dia']/1000)) +(1.5 - $datafoot[0]['t']))*$jum_kolom+$tos22_tamp_berat),2);
                                                                                   // beton  -->
                                                                                   
        if ($datakol[1]['bentuk'] == 'Kotak') {
            $beton = round($beton_kotak, 2);
        } else {
            $beton = round($beton_bundar, 2);
        }
         // bekissting  -->                                                                                   
        if ($datakol[1]['bentuk'] == 'Kotak') {
            $bekisting = round($bekisting_kotak, 2);
        } else {
            $bekisting = round($bekisting_bundar, 2);
        }

       // rasio besi  -->
        $rasio_b = round(((0.25*3.14*$datakol[1]['tulpok_dia']*$datakol[1]['tulpok_dia']*0.007855)*$datakol[1]['tulpok_jum'] * ((28*($datakol[1]['tulpok_dia']/1000))+(8*($datakol[1]['tulpok_dia']/1000))
            +$datalewat[1]['ls']+$datafoot[0]['t']+(20*($datakol[1]['tulpok_dia']/1000))+(8*($datakol[1]['tulpok_dia']/1000))
        +(1.5 - $datafoot[0]['t']))*$jum_kolom+$tos22_tamp_berat),2)/round($beton_kotak,2);


        $hasil = [
            'project_id' => $req->cari,
            'tipe_kolom' => $req->tipe_kolom,
            'tebal_plat' => $req->tebal_plat,
            'jum_kolom' => $req->jum_kolom,
            'footplat_type' => $req->footplat_type,
            'pk_sengkang_qty' => $req->pk_sengkang_qty,
            'besi' => $besi,
            'beton' => $beton,
            'bekisting' => $bekisting,
            'rasio_b' => $rasio_b
        ];

  

        tos2pedestal::insert($hasil);

        return redirect('/target');
    }

    public function del_tos21($id)
    {
        $post = tos2pedestal::all()->where('id_tos21', $id)->each->delete();
        return redirect('/target');
    }

    public function edit_tos21(Request $req)
    {
        $tipe_kolom = $req->tipe_kolom;
        $tebal_plat = $req->tebal_plat;
        $jum_kolom = $req->jum_kolom;
        $footplat_type = $req->footplat_type;
        $pk_sengkang_qty = $req->pk_sengkang_qty;

        $datakol = tos2datakolom::all()->where('nama', $tipe_kolom);
        $datafoot = tos2datafootplat::all()->where('nama', $footplat_type);
        $datalewat = tos2lewatan::all()->where('dia', $datakol[0]['tulpok_dia']);
        // dd($datalewat);
        echo $datalewat[0]['ls'];

        $a = round((3.14 * $datakol[0]['dimensi_l']) + (6 * ($datakol[0]['tulseng_dia_tumpuan'] / 1000) * 2) - ($datakol[0]['tebal_selimut'] * 8), 2);
        $b = ceil((1.5 - $datafoot[0]['t']) / $datakol[0]['tulseng_dia_jaraktump'] * 0.25 + ($datalewat[0]['ls'] / $datakol[0]['tulseng_dia_jaraktump'] * 0.25)) + $pk_sengkang_qty;
        $b1 = round(0.25 * 3.14 * $datakol[0]['tulseng_dia_tumpuan'] * $datakol[0]['tulseng_dia_tumpuan'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round((3.14 * $datakol[0]['dimensi_l']) + (6 * ($datakol[0]['tulseng_dia_lapangan'] / 1000) * 2) - ($datakol[0]['tebal_selimut'] * 8), 2);
        $b = ceil(((1.5 - $datafoot[0]['t']) / $datakol[0]['tulseng_dia_jaraklap'] * 0.2) + ($datalewat[0]['ls'] / $datakol[0]['tulseng_dia_jaraklap'] * 0.2)) * $pk_sengkang_qty;
        $b2 = round(0.25 * 3.14 * $datakol[0]['tulseng_dia_lapangan'] * $datakol[0]['tulseng_dia_lapangan'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round((3.14 * $datakol[0]['dimensi_l']) + (6 * ($datakol[0]['tulseng_dia_tumpuan'] / 1000) * 2) - ($datakol[0]['tebal_selimut'] * 8), 2);
        $b = ceil((1.5 - $datafoot[0]['t']) / $datakol[0]['tulseng_dia_jaraktump'] * 0.25 + (round($datalewat[0]['ls'], 2) / $datakol[0]['tulseng_dia_jaraktump'] * 0.25)) + $pk_sengkang_qty;
        $b3 = round(0.25 * 3.14 * $datakol[0]['tulseng_dia_tumpuan'] * $datakol[0]['tulseng_dia_tumpuan'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round((6 * ($datakol[0]['tvlap_dia'] / 1000)) * 2 + (($datakol[0]['dimensi_p']) - (($datakol[0]['tebal_selimut']) * 2)), 2);
        $b = ceil($jum_kolom / $datakol[0]['tvlap_jarak'] * 0.2) * $pk_sengkang_qty;
        $b4 = round(0.25 * 3.14 * $datakol[0]['tvlap_dia'] * $datakol[0]['tvlap_dia'] * 0.00785 * $a * $b * $jum_kolom, 2);
        $b5 = round(0.25 * 3.14 * $datakol[0]['tvlap_dia'] * $datakol[0]['tvlap_dia'] * 0.00785 * ((round((6 * ($datakol[0]['tvlap_dia'] / 1000)) * 2 + (($datakol[0]['dimensi_p']) - (($datakol[0]['tebal_selimut']) * 2)), 2)) * (ceil((($jum_kolom) * 0.25) / $datakol[0]['tvlap_jarak']) + (1 * $pk_sengkang_qty))) * $jum_kolom, 2);

        $a = round(((($datakol[0]['thtump_dia'] / 1000) * 12) + ($datakol[0]['dimensi_p'] - $datakol[0]['tebal_selimut'] * 2) * 2), 2);
        $b = ceil($jum_kolom / $datakol[0]['thtump_jarak'] * 0.25) + $pk_sengkang_qty;
        $b6 = round(0.25 * 3.14 * $datakol[0]['thtump_dia'] * $datakol[0]['thtump_dia'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round(((($datakol[0]['thtump_dia'] / 1000) * 12) + ($datakol[0]['dimensi_p'] - $datakol[0]['tebal_selimut'] * 2) * 2), 2);
        $b = ceil($jum_kolom / $datakol[0]['thlap_jarak'] * 0.2) * $pk_sengkang_qty;
        $b7 = round(0.25 * 3.14 * $datakol[0]['thlap_dia'] * $datakol[0]['thlap_dia'] * 0.00785 * $a * $b * $jum_kolom, 2);
        // echo "$b1 .' '.$b2.' '.$b3.' '.$b4.' '.$b5.' '.$b6.' '.$b7 ";
        $tos22_tamp_berat =  $b1 + $b2 + $b3  + $b4  + $b5 + $b6 + $b7;

        $beton_bundar = 3.14 * (0.5 * $datakol[0]['dimensi_l']) * (0.5 * $datakol[0]['dimensi_l']) * $jum_kolom * (1.5 - $datafoot[0]['t']);
        $beton_kotak = ($datakol[0]['dimensi_l'] * $datakol[0]['dimensi_p'] * (1.5 - $datafoot[0]['t']) * $jum_kolom);

        $bekisting_bundar = (3.14 * $datakol[0]['dimensi_l']) * ((1.5 - $datafoot[0]['t']) - $tebal_plat) * $jum_kolom;
        $bekisting_kotak = (($datakol[0]['dimensi_l'] + $datakol[0]['dimensi_p']) * 2 * ((1.5 - $datafoot[0]['t']) - $tebal_plat)) * $jum_kolom;

        $timbunan = (($datafoot[0]['b'] * $datafoot[0]['h']) - ($datakol[0]['dimensi_l'] * $datakol[0]['dimensi_p'])) * ((1.5 - $datafoot[0]['t']) - $tebal_plat) * 1.2 * $jum_kolom;

       // besi  -->
        $besi = round(((0.25*3.14*$datakol[0]['tulpok_dia']*$datakol[0]['tulpok_dia']*0.007855)*$datakol[0]['tulpok_jum'] * ((28*($datakol[0]['tulpok_dia']/1000))+(8*($datakol[0]['tulpok_dia']/1000))
         +$datalewat[0]['ls']+$datafoot[0]['t']+(20*($datakol[0]['tulpok_dia']/1000))+(8*($datakol[0]['tulpok_dia']/1000)) +(1.5 - $datafoot[0]['t']))*$jum_kolom+$tos22_tamp_berat),2);
                                                                                   // beton  -->
                                                                                   
        if ($datakol[0]['bentuk'] == 'Kotak') {
            $beton = round($beton_kotak, 2);
        } else {
            $beton = round($beton_bundar, 2);
        }
         // bekissting  -->                                                                                   
        if ($datakol[0]['bentuk'] == 'Kotak') {
            $bekisting = round($bekisting_kotak, 2);
        } else {
            $bekisting = round($bekisting_bundar, 2);
        }

        // rasio besi  -->
        $rasio_b = round(((0.25*3.14*$datakol[0]['tulpok_dia']*$datakol[0]['tulpok_dia']*0.007855)*$datakol[0]['tulpok_jum'] * ((28*($datakol[0]['tulpok_dia']/1000))+(8*($datakol[0]['tulpok_dia']/1000))
            +$datalewat[0]['ls']+$datafoot[0]['t']+(20*($datakol[0]['tulpok_dia']/1000))+(8*($datakol[0]['tulpok_dia']/1000))
        +(1.5 - $datafoot[0]['t']))*$jum_kolom+$tos22_tamp_berat),2)/round($beton_kotak,2);

        $user = tos2pedestal::all()->where("id_tos24", $req->idt)->first()->update([
            'tipe_kolom' => $req->tipe_kolom,
            'tebal_plat' => $req->tebal_plat,
            'jum_kolom' => $req->jum_kolom,
            'footplat_type' => $req->footplat_type,
            'pk_sengkang_qty' => $req->pk_sengkang_qty,
            'besi' => $besi,
            'beton' => $beton,
            'bekisting' => $bekisting,
            'rasio_b' => $besi
        ]);
        return redirect('/target');
    }

    // Tos 2 kolome Pedestal
    public function in_tos22(Request $req)
    {
        $tipe_kolom = $req->tipe_kolom;
        $tebal_plat = $req->tebal_plat;
        $jum_kolom = $req->jum_kolom;
        $footplat_type = $req->footplat_type;
        $pk_sengkang_qty = $req->pk_sengkang_qty;

        $datakol = tos2datakolom::all()->where('nama', $tipe_kolom);
        $datafoot = tos2datafootplat::all()->where('nama', $footplat_type);
        $datalewat = tos2lewatan::all()->where('dia', $datakol[0]['tulpok_dia']);
        // dd($datalewat);
        // echo $datalewat[0]['ls'];

        $a = round((3.14 * $datakol[0]['dimensi_l']) + (6 * ($datakol[0]['tulseng_dia_tumpuan'] / 1000) * 2) - ($datakol[0]['tebal_selimut'] * 8), 2);
        $b = ceil((1.5 - $datafoot[0]['t']) / $datakol[0]['tulseng_dia_jaraktump'] * 0.25 + ($datalewat[0]['ls'] / $datakol[0]['tulseng_dia_jaraktump'] * 0.25)) + $pk_sengkang_qty;
       

        $b1 = round(0.25 * 3.14 * $datakol[0]['tulseng_dia_tumpuan'] * $datakol[0]['tulseng_dia_tumpuan'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round((3.14 * $datakol[0]['dimensi_l']) + (6 * ($datakol[0]['tulseng_dia_lapangan'] / 1000) * 2) - ($datakol[0]['tebal_selimut'] * 8), 2);
        $b = ceil(((1.5 - $datafoot[0]['t']) / $datakol[0]['tulseng_dia_jaraklap'] * 0.2) + ($datalewat[0]['ls'] / $datakol[0]['tulseng_dia_jaraklap'] * 0.2)) * $pk_sengkang_qty;
        $b2 = round(0.25 * 3.14 * $datakol[0]['tulseng_dia_lapangan'] * $datakol[0]['tulseng_dia_lapangan'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round((3.14 * $datakol[0]['dimensi_l']) + (6 * ($datakol[0]['tulseng_dia_tumpuan'] / 1000) * 2) - ($datakol[0]['tebal_selimut'] * 8), 2);
        $b = ceil((1.5 - $datafoot[0]['t']) / $datakol[0]['tulseng_dia_jaraktump'] * 0.25 + (round($datalewat[0]['ls'], 2) / $datakol[0]['tulseng_dia_jaraktump'] * 0.25)) + $pk_sengkang_qty;
        $b3 = round(0.25 * 3.14 * $datakol[0]['tulseng_dia_tumpuan'] * $datakol[0]['tulseng_dia_tumpuan'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round((6 * ($datakol[0]['tvlap_dia'] / 1000)) * 2 + (($datakol[0]['dimensi_p']) - (($datakol[0]['tebal_selimut']) * 2)), 2);
        $b = ceil($jum_kolom / $datakol[0]['tvlap_jarak'] * 0.2) * $pk_sengkang_qty;
        $b4 = round(0.25 * 3.14 * $datakol[0]['tvlap_dia'] * $datakol[0]['tvlap_dia'] * 0.00785 * $a * $b * $jum_kolom, 2);
        $b5 = round(0.25 * 3.14 * $datakol[0]['tvlap_dia'] * $datakol[0]['tvlap_dia'] * 0.00785 * ((round((6 * ($datakol[0]['tvlap_dia'] / 1000)) * 2 + (($datakol[0]['dimensi_p']) - (($datakol[0]['tebal_selimut']) * 2)), 2)) * (ceil((($jum_kolom) * 0.25) / $datakol[0]['tvlap_jarak']) + (1 * $pk_sengkang_qty))) * $jum_kolom, 2);

        $a = round(((($datakol[0]['thtump_dia'] / 1000) * 12) + ($datakol[0]['dimensi_p'] - $datakol[0]['tebal_selimut'] * 2) * 2), 2);
        $b = ceil($jum_kolom / $datakol[0]['thtump_jarak'] * 0.25) + $pk_sengkang_qty;
        $b6 = round(0.25 * 3.14 * $datakol[0]['thtump_dia'] * $datakol[0]['thtump_dia'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round(((($datakol[0]['thtump_dia'] / 1000) * 12) + ($datakol[0]['dimensi_p'] - $datakol[0]['tebal_selimut'] * 2) * 2), 2);
        $b = ceil($jum_kolom / $datakol[0]['thlap_jarak'] * 0.2) * $pk_sengkang_qty;
        $b7 = round(0.25 * 3.14 * $datakol[0]['thlap_dia'] * $datakol[0]['thlap_dia'] * 0.00785 * $a * $b * $jum_kolom, 2);
        echo "$b1 .' '.$b2.' '.$b3.' '.$b4.' '.$b5.' '.$b6.' '.$b7 ".'\n';
        $tos22_tamp_berat =  $b1 + $b2 + $b3  + $b4  + $b5 + $b6 + $b7;

        $beton_bundar = 3.14 * (0.5 * $datakol[0]['dimensi_l']) * (0.5 * $datakol[0]['dimensi_l']) * $jum_kolom * (1.5 - $datafoot[0]['t']);
        $beton_kotak = ($datakol[0]['dimensi_l'] * $datakol[0]['dimensi_p'] * (1.5 - $datafoot[0]['t']) * $jum_kolom);

        $bekisting_bundar = (3.14 * $datakol[0]['dimensi_l']) * ((1.5 - $datafoot[0]['t']) - $tebal_plat) * $jum_kolom;
        $bekisting_kotak = (($datakol[0]['dimensi_l'] + $datakol[0]['dimensi_p']) * 2 * ((1.5 - $datafoot[0]['t']) - $tebal_plat)) * $jum_kolom;

        $timbunan = (($datafoot[0]['b'] * $datafoot[0]['h']) - ($datakol[0]['dimensi_l'] * $datakol[0]['dimensi_p'])) * ((1.5 - $datafoot[0]['t']) - $tebal_plat) * 1.2 * $jum_kolom;

       // besi  -->
        $besi = round(((0.25*3.14*$datakol[0]['tulpok_dia']*$datakol[0]['tulpok_dia']*0.007855)*$datakol[0]['tulpok_jum'] * ((28*($datakol[0]['tulpok_dia']/1000))+(8*($datakol[0]['tulpok_dia']/1000))
         +$datalewat[0]['ls']+$datafoot[0]['t']+(20*($datakol[0]['tulpok_dia']/1000))+(8*($datakol[0]['tulpok_dia']/1000)) +(1.5 - $datafoot[0]['t']))*$jum_kolom+$tos22_tamp_berat),2);
                                                                                   // beton  -->
                                                                                   
        if ($datakol[0]['bentuk'] == 'Kotak') {
            $beton = round($beton_kotak, 2);
        } else {
            $beton = round($beton_bundar, 2);
        }
         // bekissting  -->                                                                                   
        if ($datakol[0]['bentuk'] == 'Kotak') {
            $bekisting = round($bekisting_kotak, 2);
        } else {
            $bekisting = round($bekisting_bundar, 2);
        }

        // rasio besi  -->
        $rasio_b = round(((0.25*3.14*$datakol[0]['tulpok_dia']*$datakol[0]['tulpok_dia']*0.007855)*$datakol[0]['tulpok_jum'] * ((28*($datakol[0]['tulpok_dia']/1000))+(8*($datakol[0]['tulpok_dia']/1000))
            +$datalewat[0]['ls']+$datafoot[0]['t']+(20*($datakol[0]['tulpok_dia']/1000))+(8*($datakol[0]['tulpok_dia']/1000))
        +(1.5 - $datafoot[0]['t']))*$jum_kolom+$tos22_tamp_berat),2)/round($beton_kotak,2);


        $hasil = [
            'project_id' => $req->cari,
            'tipe_kolom' => $req->tipe_kolom,
            'tebal_plat' => $req->tebal_plat,
            'jum_kolom' => $req->jum_kolom,
            'footplat_type' => $req->footplat_type,
            'pk_sengkang_qty' => $req->pk_sengkang_qty,
            'besi' => $besi,
            'beton' => $beton,
            'bekisting' => $bekisting,
            'timbunan' => $timbunan,
            'rasio_b' => $rasio_b
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
        $tipe_kolom = $req->tipe_kolom;
        $tebal_plat = $req->tebal_plat;
        $jum_kolom = $req->jum_kolom;
        $footplat_type = $req->footplat_type;
        $pk_sengkang_qty = $req->pk_sengkang_qty;

        $datakol = tos2datakolom::all()->where('nama', $tipe_kolom);
        $datafoot = tos2datafootplat::all()->where('nama', $footplat_type);
        $datalewat = tos2lewatan::all()->where('dia', $datakol[0]['tulpok_dia']);
        // dd($datalewat);
        // echo $datalewat[0]['ls'];

        $a = round((3.14 * $datakol[0]['dimensi_l']) + (6 * ($datakol[0]['tulseng_dia_tumpuan'] / 1000) * 2) - ($datakol[0]['tebal_selimut'] * 8), 2);
        $b = ceil((1.5 - $datafoot[0]['t']) / $datakol[0]['tulseng_dia_jaraktump'] * 0.25 + ($datalewat[0]['ls'] / $datakol[0]['tulseng_dia_jaraktump'] * 0.25)) + $pk_sengkang_qty;
        $b1 = round(0.25 * 3.14 * $datakol[0]['tulseng_dia_tumpuan'] * $datakol[0]['tulseng_dia_tumpuan'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round((3.14 * $datakol[0]['dimensi_l']) + (6 * ($datakol[0]['tulseng_dia_lapangan'] / 1000) * 2) - ($datakol[0]['tebal_selimut'] * 8), 2);
        $b = ceil(((1.5 - $datafoot[0]['t']) / $datakol[0]['tulseng_dia_jaraklap'] * 0.2) + ($datalewat[0]['ls'] / $datakol[0]['tulseng_dia_jaraklap'] * 0.2)) * $pk_sengkang_qty;
        $b2 = round(0.25 * 3.14 * $datakol[0]['tulseng_dia_lapangan'] * $datakol[0]['tulseng_dia_lapangan'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round((3.14 * $datakol[0]['dimensi_l']) + (6 * ($datakol[0]['tulseng_dia_tumpuan'] / 1000) * 2) - ($datakol[0]['tebal_selimut'] * 8), 2);
        $b = ceil((1.5 - $datafoot[0]['t']) / $datakol[0]['tulseng_dia_jaraktump'] * 0.25 + (round($datalewat[0]['ls'], 2) / $datakol[0]['tulseng_dia_jaraktump'] * 0.25)) + $pk_sengkang_qty;
        $b3 = round(0.25 * 3.14 * $datakol[0]['tulseng_dia_tumpuan'] * $datakol[0]['tulseng_dia_tumpuan'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round((6 * ($datakol[0]['tvlap_dia'] / 1000)) * 2 + (($datakol[0]['dimensi_p']) - (($datakol[0]['tebal_selimut']) * 2)), 2);
        $b = ceil($jum_kolom / $datakol[0]['tvlap_jarak'] * 0.2) * $pk_sengkang_qty;
        $b4 = round(0.25 * 3.14 * $datakol[0]['tvlap_dia'] * $datakol[0]['tvlap_dia'] * 0.00785 * $a * $b * $jum_kolom, 2);
        $b5 = round(0.25 * 3.14 * $datakol[0]['tvlap_dia'] * $datakol[0]['tvlap_dia'] * 0.00785 * ((round((6 * ($datakol[0]['tvlap_dia'] / 1000)) * 2 + (($datakol[0]['dimensi_p']) - (($datakol[0]['tebal_selimut']) * 2)), 2)) * (ceil((($jum_kolom) * 0.25) / $datakol[0]['tvlap_jarak']) + (1 * $pk_sengkang_qty))) * $jum_kolom, 2);

        $a = round(((($datakol[0]['thtump_dia'] / 1000) * 12) + ($datakol[0]['dimensi_p'] - $datakol[0]['tebal_selimut'] * 2) * 2), 2);
        $b = ceil($jum_kolom / $datakol[0]['thtump_jarak'] * 0.25) + $pk_sengkang_qty;
        $b6 = round(0.25 * 3.14 * $datakol[0]['thtump_dia'] * $datakol[0]['thtump_dia'] * 0.00785 * $a * $b * $jum_kolom, 2);

        $a = round(((($datakol[0]['thtump_dia'] / 1000) * 12) + ($datakol[0]['dimensi_p'] - $datakol[0]['tebal_selimut'] * 2) * 2), 2);
        $b = ceil($jum_kolom / $datakol[0]['thlap_jarak'] * 0.2) * $pk_sengkang_qty;
        $b7 = round(0.25 * 3.14 * $datakol[0]['thlap_dia'] * $datakol[0]['thlap_dia'] * 0.00785 * $a * $b * $jum_kolom, 2);
        // echo "$b1 .' '.$b2.' '.$b3.' '.$b4.' '.$b5.' '.$b6.' '.$b7 ";
        $tos22_tamp_berat =  $b1 + $b2 + $b3  + $b4  + $b5 + $b6 + $b7;

        $beton_bundar = 3.14 * (0.5 * $datakol[0]['dimensi_l']) * (0.5 * $datakol[0]['dimensi_l']) * $jum_kolom * (1.5 - $datafoot[0]['t']);
        $beton_kotak = ($datakol[0]['dimensi_l'] * $datakol[0]['dimensi_p'] * (1.5 - $datafoot[0]['t']) * $jum_kolom);

        $bekisting_bundar = (3.14 * $datakol[0]['dimensi_l']) * ((1.5 - $datafoot[0]['t']) - $tebal_plat) * $jum_kolom;
        $bekisting_kotak = (($datakol[0]['dimensi_l'] + $datakol[0]['dimensi_p']) * 2 * ((1.5 - $datafoot[0]['t']) - $tebal_plat)) * $jum_kolom;

        $timbunan = (($datafoot[0]['b'] * $datafoot[0]['h']) - ($datakol[0]['dimensi_l'] * $datakol[0]['dimensi_p'])) * ((1.5 - $datafoot[0]['t']) - $tebal_plat) * 1.2 * $jum_kolom;

       // besi  -->
        $besi = round(((0.25*3.14*$datakol[0]['tulpok_dia']*$datakol[0]['tulpok_dia']*0.007855)*$datakol[0]['tulpok_jum'] * ((28*($datakol[0]['tulpok_dia']/1000))+(8*($datakol[0]['tulpok_dia']/1000))
         +$datalewat[0]['ls']+$datafoot[0]['t']+(20*($datakol[0]['tulpok_dia']/1000))+(8*($datakol[0]['tulpok_dia']/1000)) +(1.5 - $datafoot[0]['t']))*$jum_kolom+$tos22_tamp_berat),2);
                                                                                   // beton  -->
                                                                                   
        if ($datakol[0]['bentuk'] == 'Kotak') {
            $beton = round($beton_kotak, 2);
        } else {
            $beton = round($beton_bundar, 2);
        }
         // bekissting  -->                                                                                   
        if ($datakol[0]['bentuk'] == 'Kotak') {
            $bekisting = round($bekisting_kotak, 2);
        } else {
            $bekisting = round($bekisting_bundar, 2);
        }

        // rasio besi  -->
        $rasio_b = round(((0.25*3.14*$datakol[0]['tulpok_dia']*$datakol[0]['tulpok_dia']*0.007855)*$datakol[0]['tulpok_jum'] * ((28*($datakol[0]['tulpok_dia']/1000))+(8*($datakol[0]['tulpok_dia']/1000))
            +$datalewat[0]['ls']+$datafoot[0]['t']+(20*($datakol[0]['tulpok_dia']/1000))+(8*($datakol[0]['tulpok_dia']/1000))
        +(1.5 - $datafoot[0]['t']))*$jum_kolom+$tos22_tamp_berat),2)/round($beton_kotak,2);


        $user = tos2kolompedestal::all()->where("id_tos22", $req->idt)->first()->update([
            'tipe_kolom' => $req->tipe_kolom,
            'tebal_plat' => $req->tebal_plat,
            'jum_kolom' => $req->jum_kolom,
            'footplat_type' => $req->footplat_type,
            'pk_sengkang_qty' => $req->pk_sengkang_qty,
            'besi' => $besi,
            'beton' => $beton,
            'bekisting' => $bekisting,
            'timbunan' => $timbunan,
            'rasio_b' => $rasio_b

        ]);
        return redirect('/target');
    }


    // Tos 2 Data Kolom
    public function in_tos26(Request $req)
    {
        // dd($req);
        $hasil = [
            'project_id' => $req->cari,
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
            'project_id' => $req->cari,
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
            'project_id' => $req->cari,
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
            'project_id' => $req->cari,
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
        $dim_kol = $req->dim_kol;
        $pk_sengkang_qty = $req->pk_sengkang_qty;
        $jumkom = 21;

        $datakol = tos3data::all()->where('nama', $tipe_kolom);
        
        $datalewat = tos3lewatan::all()->where('dia', $datakol[1]['tulpok_dia']);

        // dd($datalewat);

        $a = ceil($dim_kol/$datakol[1]['tulseng_dia_jaraktump']*1/4+$datalewat[0]['ls']/$datakol[1]['tulseng_dia_jaraktump']*1/4)+1*$pk_sengkang_qty;
        $b = ((3.14*$datakol[1]['dimensi_l'])+(6*$datakol[1]['tulseng_dia_tumpuan']/1000*2))-($datakol[1]['tebal_selimut']*8);
        $Y11 = $a*$b;

        $a = ceil($dim_kol/$datakol[1]['tulseng_dia_jaraklap']*1/5+$datalewat[0]['ls']/$datakol[1]['tulseng_dia_jaraklap']*1/5)*$pk_sengkang_qty;
        $b = ((3.14*$datakol[1]['dimensi_l'])+(6*$datakol[1]['tulseng_dia_lapangan']/1000*2))-($datakol[1]['tebal_selimut']*8);
        $Y12 = $a*$b;

        $a = ceil($dim_kol/$datakol[1]['tulseng_dia_jaraktump']*1/4+$datalewat[0]['ls']/$datakol[1]['tulseng_dia_jaraktump']*1/4)+1*$pk_sengkang_qty;
        $b = ((3.14*$datakol[1]['dimensi_l'])+(6*$datakol[1]['tulseng_dia_tumpuan']/1000*2))-($datakol[1]['tebal_selimut']*8);
        $Y13 = $a*$b;

        $a = ceil($jum_kolom/$datakol[1]['tvtump_jarak']*1/4)+1*$pk_sengkang_qty;
        $b = (6*$datakol[1]['tvtump_dia']/1000*2)+($datakol[1]['dimensi_p']-$datakol[1]['tulseng_dia_jaraktump']*2);
        $Y14 = $a*$b;

        $a = ceil($jum_kolom/$datakol[1]['tvlap_jarak']*1/5)*$pk_sengkang_qty;
        $b = (6*$datakol[1]['tvlap_dia']/1000*2)+($datakol[1]['dimensi_p']-$datakol[1]['tulseng_dia_jaraktump']*2);
        $Y15 = $a*$b;

        $a = ceil($jum_kolom/$datakol[1]['thtump_jarak']*1/4)+1*$pk_sengkang_qty;
        $b = ((6*$datakol[1]['thtump_dia']/1000*2)+($datakol[1]['dimensi_p']-$datakol[1]['tulseng_dia_jaraktump']*2)*2);
        $Y16 = $a*$b;

        $a = ceil($jum_kolom/$datakol[1]['thlap_jarak']*1/5)*$pk_sengkang_qty;
        $b = ((6*$datakol[1]['thlap_dia']/1000*2)+($datakol[1]['dimensi_p']-$datakol[1]['tulseng_dia_jaraktump']*2)*2);
        $Y17 = $a*$b; 


        $b1 = (0.25*3.14*$datakol[1]['tulseng_dia_tumpuan']*$datakol[1]['tulseng_dia_tumpuan']*0.00785)*$Y11*$jumkom;
        $b2 = (0.25*3.14*$datakol[1]['tulseng_dia_lapangan']*$datakol[1]['tulseng_dia_lapangan']*0.00785)*$Y12*$jumkom;
        $b3 = (0.25*3.14*$datakol[1]['tulseng_dia_tumpuan']*$datakol[1]['tulseng_dia_tumpuan']*0.00785)*$Y13*$jumkom ;
        $b4 = (0.25*3.14*$datakol[1]['tvtump_dia']*0.00785)*$Y14*$jumkom ;
        $b5 = (0.25*3.14*$datakol[1]['tvlap_dia']*0.00785)*$Y15*$jumkom;
        $b6 = (0.25*3.14*$datakol[1]['thtump_dia']*0.00785)*$Y16*$jumkom;
        $b7 = (0.25*3.14*$datakol[1]['thlap_dia']*0.00785)*$Y17*$jumkom;

        $tos32_tamp_berat = $b1 + $b2 + $b3 + $b4 + $b5 + $b6 + $b7;

        $beton_bundar = 3.14 * (0.5 * $datakol[1]['dimensi_l']) * (0.5 * $datakol[1]['dimensi_l']) * $jum_kolom * $dim_kol;
        
        $beton_kotak = ($datakol[1]['dimensi_l'] * $datakol[1]['dimensi_p'] * $dim_kol * $jum_kolom);
        

        $bekisting_bundar = (3.14 * $datakol[1]['dimensi_l']) * ($dim_kol - $tebal_plat) * $jum_kolom ;
        $bekisting_kotak = (($datakol[1]['dimensi_l'] + $datakol[1]['dimensi_p']) * 2 * ($dim_kol - $tebal_plat)) * $jum_kolom;

        

       // besi  -->
        // echo "part 1 : ".(0.25*3.14*$datakol[1]['tulpok_dia']*$datakol[1]['tulpok_dia']*0.00785)*($datalewat[0]['ls']+$dim_kol+(28*($datakol[1]['tulpok_dia']*0.001))+(8*($datakol[1]['tulpok_dia']*0.001)))*$datakol[1]['tulpok_jum']*$jum_kolom ;

        // echo "<br> <br> Q18 :".$datalewat[0]['ls'];
        // echo "<br> D18 :".$dim_kol." tulpok jum ".$datakol[1]['tulpok_jum'];
        // echo "<br> R18 :".((28*($datakol[1]['tulpok_dia']*0.001))+(8*($datakol[1]['tulpok_dia']*0.001)));
        // echo "<br> S18 :".(round($datalewat[0]['ls'],2)+round($dim_kol,2)+round((28*($datakol[1]['tulpok_dia']*0.001))+(8*($datakol[1]['tulpok_dia']*0.001)),2));
        // dd($datalewat);
        $besi = round((0.25*3.14*$datakol[1]['tulpok_dia']*$datakol[1]['tulpok_dia']*0.00785)*($datalewat[0]['ls']+$dim_kol+(28*($datakol[1]['tulpok_dia']*0.001))+(8*($datakol[1]['tulpok_dia']*0.001)))*$datakol[1]['tulpok_jum']*$jum_kolom,2) + $tos32_tamp_berat;
        // echo $besi;
        
        
        // beton  -->
                                                                                   
        if ($datakol[1]['bentuk'] == 'Kotak') {
            $beton = round($beton_kotak, 2);
        } else {
            $beton = round($beton_bundar, 2);
        }
         // bekissting  -->                                                                                   
        if ($datakol[1]['bentuk'] == 'Kotak') {
            $bekisting = round($bekisting_kotak, 2);
        } else {
            $bekisting = round($bekisting_bundar, 2);
        }

        // rasio besi  -->
        $rasio_b = 0;//round($besi/$beton_kotak,2);

        
        // dd($datal);
        // echo "<br>".$beton_bundar;
        // echo "<br>".$beton_kotak;
        // dd($datalewat);
       
        $hasil = [
            'project_id' => $req->cari,
            'tipe_kolom' => $req->tipe_kolom,
            'tebal_plat' => $req->tebal_plat,
            'jum_kolom' => $req->jum_kolom,
            'pk_sengkang_qty' => $req->pk_sengkang_qty,
            'besi' => $besi,
            'beton' => $beton,
            'bekisting' => $bekisting,
            'rasio_b' => $rasio_b
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
        $tipe_kolom = $req->tipe_kolom;
        $tebal_plat = $req->tebal_plat;
        $jum_kolom = $req->jum_kolom;
        $dim_kol = $req->dim_kol;
        $pk_sengkang_qty = $req->pk_sengkang_qty;
        $jumkom = 21;

        $datakol = tos3data::all()->where('nama', $tipe_kolom);
        
        $datalewat = tos3lewatan::all()->where('dia', $datakol[0]['tulpok_dia']);

        $a = ceil($dim_kol/$datakol[0]['tulseng_dia_jaraktump']*1/4+$datalewat[0]['ls']/$datakol[0]['tulseng_dia_jaraktump']*1/4)+1*$pk_sengkang_qty;
        $b = ((3.14*$datakol[0]['dimensi_l'])+(6*$datakol[0]['tulseng_dia_tumpuan']/1000*2))-($datakol[0]['tebal_selimut']*8);
        $Y11 = $a*$b;

        $a = ceil($dim_kol/$datakol[0]['tulseng_dia_jaraklap']*1/5+$datalewat[0]['ls']/$datakol[0]['tulseng_dia_jaraklap']*1/5)*$pk_sengkang_qty;
        $b = ((3.14*$datakol[0]['dimensi_l'])+(6*$datakol[0]['tulseng_dia_lapangan']/1000*2))-($datakol[0]['tebal_selimut']*8);
        $Y12 = $a*$b;

        $a = ceil($dim_kol/$datakol[0]['tulseng_dia_jaraktump']*1/4+$datalewat[0]['ls']/$datakol[0]['tulseng_dia_jaraktump']*1/4)+1*$pk_sengkang_qty;
        $b = ((3.14*$datakol[0]['dimensi_l'])+(6*$datakol[0]['tulseng_dia_tumpuan']/1000*2))-($datakol[0]['tebal_selimut']*8);
        $Y13 = $a*$b;

        $a = ceil($jum_kolom/$datakol[0]['tvtump_jarak']*1/4)+1*$pk_sengkang_qty;
        $b = (6*$datakol[0]['tvtump_dia']/1000*2)+($datakol[0]['dimensi_p']-$datakol[0]['tulseng_dia_jaraktump']*2);
        $Y14 = $a*$b;

        $a = ceil($jum_kolom/$datakol[0]['tvlap_jarak']*1/5)*$pk_sengkang_qty;
        $b = (6*$datakol[0]['tvlap_dia']/1000*2)+($datakol[0]['dimensi_p']-$datakol[0]['tulseng_dia_jaraktump']*2);
        $Y15 = $a*$b;

        $a = ceil($jum_kolom/$datakol[0]['thtump_jarak']*1/4)+1*$pk_sengkang_qty;
        $b = ((6*$datakol[0]['thtump_dia']/1000*2)+($datakol[0]['dimensi_p']-$datakol[0]['tulseng_dia_jaraktump']*2)*2);
        $Y16 = $a*$b;

        $a = ceil($jum_kolom/$datakol[0]['thlap_jarak']*1/5)*$pk_sengkang_qty;
        $b = ((6*$datakol[0]['thlap_dia']/1000*2)+($datakol[0]['dimensi_p']-$datakol[0]['tulseng_dia_jaraktump']*2)*2);
        $Y17 = $a*$b; 


        $b1 = (0.25*3.14*$datakol[0]['tulseng_dia_tumpuan']*$datakol[0]['tulseng_dia_tumpuan']*0.00785)*$Y11*$jumkom;
        $b2 = (0.25*3.14*$datakol[0]['tulseng_dia_lapangan']*$datakol[0]['tulseng_dia_lapangan']*0.00785)*$Y12*$jumkom;
        $b3 = (0.25*3.14*$datakol[0]['tulseng_dia_tumpuan']*$datakol[0]['tulseng_dia_tumpuan']*0.00785)*$Y13*$jumkom ;
        $b4 = (0.25*3.14*$datakol[0]['tvtump_dia']*0.00785)*$Y14*$jumkom ;
        $b5 = (0.25*3.14*$datakol[0]['tvlap_dia']*0.00785)*$Y15*$jumkom;
        $b6 = (0.25*3.14*$datakol[0]['thtump_dia']*0.00785)*$Y16*$jumkom;
        $b7 = (0.25*3.14*$datakol[0]['thlap_dia']*0.00785)*$Y17*$jumkom;

        $tos32_tamp_berat = $b1 + $b2 + $b3 + $b4 + $b5 + $b6 + $b7;

        $beton_bundar = 3.14 * (0.5 * $datakol[0]['dimensi_l']) * (0.5 * $datakol[0]['dimensi_l']) * $jum_kolom * $dim_kol;
        
        $beton_kotak = ($datakol[0]['dimensi_l'] * $datakol[0]['dimensi_p'] * $dim_kol * $jum_kolom);
        

        $bekisting_bundar = (3.14 * $datakol[0]['dimensi_l']) * ($dim_kol - $tebal_plat) * $jum_kolom ;
        $bekisting_kotak = (($datakol[0]['dimensi_l'] + $datakol[0]['dimensi_p']) * 2 * ($dim_kol - $tebal_plat)) * $jum_kolom;

        

       // besi  -->
        // echo "part 1 : ".(0.25*3.14*$datakol[0]['tulpok_dia']*$datakol[0]['tulpok_dia']*0.00785)*($datalewat[0]['ls']+$dim_kol+(28*($datakol[0]['tulpok_dia']*0.001))+(8*($datakol[0]['tulpok_dia']*0.001)))*$datakol[0]['tulpok_jum']*$jum_kolom ;

        // echo "<br> <br> Q18 :".$datalewat[0]['ls'];
        // echo "<br> D18 :".$dim_kol." tulpok jum ".$datakol[0]['tulpok_jum'];
        // echo "<br> R18 :".((28*($datakol[0]['tulpok_dia']*0.001))+(8*($datakol[0]['tulpok_dia']*0.001)));
        // echo "<br> S18 :".(round($datalewat[0]['ls'],2)+round($dim_kol,2)+round((28*($datakol[0]['tulpok_dia']*0.001))+(8*($datakol[0]['tulpok_dia']*0.001)),2));
        // dd($datalewat);
        $besi = round((0.25*3.14*$datakol[0]['tulpok_dia']*$datakol[0]['tulpok_dia']*0.00785)*($datalewat[0]['ls']+$dim_kol+(28*($datakol[0]['tulpok_dia']*0.001))+(8*($datakol[0]['tulpok_dia']*0.001)))*$datakol[0]['tulpok_jum']*$jum_kolom,2) + $tos32_tamp_berat;
        echo $besi;
        
        
        // beton  -->
                                                                                   
        if ($datakol[0]['bentuk'] == 'Kotak') {
            $beton = round($beton_kotak, 2);
        } else {
            $beton = round($beton_bundar, 2);
        }
         // bekissting  -->                                                                                   
        if ($datakol[0]['bentuk'] == 'Kotak') {
            $bekisting = round($bekisting_kotak, 2);
        } else {
            $bekisting = round($bekisting_bundar, 2);
        }

        // rasio besi  -->
        $rasio_b = round($besi/$beton_kotak,2);

        
        // dd($datal);

        
        $user = tos3ground::all()->where("id_tos24", $req->idt)->first()->update([
            'tipe_kolom' => $req->tipe_kolom,
            'tebal_plat' => $req->tebal_plat,
            'jum_kolom' => $req->jum_kolom,
            'pk_sengkang_qty' => $req->pk_sengkang_qty,
            'besi' => $besi,
            'beton' => $beton,
            'bekisting' => $bekisting,
            'rasio_b' => $rasio_b

        ]);
        return redirect('/target');
    }

    // Tos Ground
    public function in_tos33(Request $req)
    {
        $tipe_kolom = $req->tipe_kolom;
        $tebal_plat = $req->tebal_plat;
        $jum_kolom = $req->jum_kolom;
        $dim_kol = $req->dim_kom;
        $pk_sengkang_qty = $req->pk_sengkang_qty;
        $jumkom = 21;

        $datakol = tos3data::all()->where('nama', $tipe_kolom);
        
        $datalewat = tos3lewatan::all()->where('dia', $datakol[1]['tulpok_dia']);

        $a = ceil($dim_kol/$datakol[1]['tulseng_dia_jaraktump']*1/4+$datalewat[0]['ls']/$datakol[1]['tulseng_dia_jaraktump']*1/4)+1*$pk_sengkang_qty;
        $b = ((3.14*$datakol[1]['dimensi_l'])+(6*$datakol[1]['tulseng_dia_tumpuan']/1000*2))-($datakol[1]['tebal_selimut']*8);
        $Y11 = $a*$b;

        $a = ceil($dim_kol/$datakol[1]['tulseng_dia_jaraklap']*1/5+$datalewat[0]['ls']/$datakol[1]['tulseng_dia_jaraklap']*1/5)*$pk_sengkang_qty;
        $b = ((3.14*$datakol[1]['dimensi_l'])+(6*$datakol[1]['tulseng_dia_lapangan']/1000*2))-($datakol[1]['tebal_selimut']*8);
        $Y12 = $a*$b;

        $a = ceil($dim_kol/$datakol[1]['tulseng_dia_jaraktump']*1/4+$datalewat[0]['ls']/$datakol[1]['tulseng_dia_jaraktump']*1/4)+1*$pk_sengkang_qty;
        $b = ((3.14*$datakol[1]['dimensi_l'])+(6*$datakol[1]['tulseng_dia_tumpuan']/1000*2))-($datakol[1]['tebal_selimut']*8);
        $Y13 = $a*$b;

        $a = ceil($jum_kolom/$datakol[1]['tvtump_jarak']*1/4)+1*$pk_sengkang_qty;
        $b = (6*$datakol[1]['tvtump_dia']/1000*2)+($datakol[1]['dimensi_p']-$datakol[1]['tulseng_dia_jaraktump']*2);
        $Y14 = $a*$b;

        $a = ceil($jum_kolom/$datakol[1]['tvlap_jarak']*1/5)*$pk_sengkang_qty;
        $b = (6*$datakol[1]['tvlap_dia']/1000*2)+($datakol[1]['dimensi_p']-$datakol[1]['tulseng_dia_jaraktump']*2);
        $Y15 = $a*$b;

        $a = ceil($jum_kolom/$datakol[1]['thtump_jarak']*1/4)+1*$pk_sengkang_qty;
        $b = ((6*$datakol[1]['thtump_dia']/1000*2)+($datakol[1]['dimensi_p']-$datakol[1]['tulseng_dia_jaraktump']*2)*2);
        $Y16 = $a*$b;

        $a = ceil($jum_kolom/$datakol[1]['thlap_jarak']*1/5)*$pk_sengkang_qty;
        $b = ((6*$datakol[1]['thlap_dia']/1000*2)+($datakol[1]['dimensi_p']-$datakol[1]['tulseng_dia_jaraktump']*2)*2);
        $Y17 = $a*$b; 


        $b1 = (0.25*3.14*$datakol[1]['tulseng_dia_tumpuan']*$datakol[1]['tulseng_dia_tumpuan']*0.00785)*$Y11*$jumkom;
        $b2 = (0.25*3.14*$datakol[1]['tulseng_dia_lapangan']*$datakol[1]['tulseng_dia_lapangan']*0.00785)*$Y12*$jumkom;
        $b3 = (0.25*3.14*$datakol[1]['tulseng_dia_tumpuan']*$datakol[1]['tulseng_dia_tumpuan']*0.00785)*$Y13*$jumkom ;
        $b4 = (0.25*3.14*$datakol[1]['tvtump_dia']*0.00785)*$Y14*$jumkom ;
        $b5 = (0.25*3.14*$datakol[1]['tvlap_dia']*0.00785)*$Y15*$jumkom;
        $b6 = (0.25*3.14*$datakol[1]['thtump_dia']*0.00785)*$Y16*$jumkom;
        $b7 = (0.25*3.14*$datakol[1]['thlap_dia']*0.00785)*$Y17*$jumkom;

        $tos32_tamp_berat = $b1 + $b2 + $b3 + $b4 + $b5 + $b6 + $b7;

        $beton_bundar = 3.14 * (0.5 * $datakol[1]['dimensi_l']) * (0.5 * $datakol[1]['dimensi_l']) * $jum_kolom * $dim_kol;
        
        $beton_kotak = ($datakol[1]['dimensi_l'] * $datakol[1]['dimensi_p'] * $dim_kol * $jum_kolom);
        

        $bekisting_bundar = (3.14 * $datakol[1]['dimensi_l']) * ($dim_kol - $tebal_plat) * $jum_kolom ;
        $bekisting_kotak = (($datakol[1]['dimensi_l'] + $datakol[1]['dimensi_p']) * 2 * ($dim_kol - $tebal_plat)) * $jum_kolom;

        

       // besi  -->
        // echo "part 1 : ".(0.25*3.14*$datakol[1]['tulpok_dia']*$datakol[1]['tulpok_dia']*0.00785)*($datalewat[]['ls']+$dim_kol+(28*($datakol[1]['tulpok_dia']*0.001))+(8*($datakol[1]['tulpok_dia']*0.001)))*$datakol[1]['tulpok_jum']*$jum_kolom ;

        // echo "<br> <br> Q18 :".$datalewat[]['ls'];
        // echo "<br> D18 :".$dim_kol." tulpok jum ".$datakol[1]['tulpok_jum'];
        // echo "<br> R18 :".((28*($datakol[1]['tulpok_dia']*0.001))+(8*($datakol[1]['tulpok_dia']*0.001)));
        // echo "<br> S18 :".(round($datalewat[]['ls'],2)+round($dim_kol,2)+round((28*($datakol[1]['tulpok_dia']*0.001))+(8*($datakol[1]['tulpok_dia']*0.001)),2));
        // dd($datalewat);
        $besi = round((0.25*3.14*$datakol[1]['tulpok_dia']*$datakol[1]['tulpok_dia']*0.00785)*($datalewat[0]['ls']+$dim_kol+(28*($datakol[1]['tulpok_dia']*0.001))+(8*($datakol[1]['tulpok_dia']*0.001)))*$datakol[1]['tulpok_jum']*$jum_kolom,2) + $tos32_tamp_berat;
        echo $besi;
        
        
        // beton  -->
                                                                                   
        if ($datakol[1]['bentuk'] == 'Kotak') {
            $beton = round($beton_kotak, 2);
        } else {
            $beton = round($beton_bundar, 2);
        }
         // bekissting  -->                                                                                   
        if ($datakol[1]['bentuk'] == 'Kotak') {
            $bekisting = round($bekisting_kotak, 2);
        } else {
            $bekisting = round($bekisting_bundar, 2);
        }

        // rasio besi  -->
        $rasio_b = round($besi/$beton_kotak,2);

        
        // dd($datal);

        
       
        $hasil = [
            'project_id' => $req->cari,
            'tipe_kolom' => $req->tipe_kolom,
            'tebal_plat' => $req->tebal_plat,
            'jum_kolom' => $req->jum_kolom,
            'pk_sengkang_qty' => $req->pk_sengkang_qty,
            'besi' => $besi,
            'beton' => $beton,
            'bekisting' => $bekisting,
            'rasio_b' => $rasio_b
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
        $tipe_kolom = $req->tipe_kolom;
        $tebal_plat = $req->tebal_plat;
        $jum_kolom = $req->jum_kolom;
        $dim_kol = $req->dim_kom;
        $pk_sengkang_qty = $req->pk_sengkang_qty;
        $jumkom = 21;

        $datakol = tos3data::all()->where('nama', $tipe_kolom);
        
        $datalewat = tos3lewatan::all()->where('dia', $datakol[1]['tulpok_dia']);

        $a = ceil($dim_kol/$datakol[1]['tulseng_dia_jaraktump']*1/4+$datalewat[0]['ls']/$datakol[1]['tulseng_dia_jaraktump']*1/4)+1*$pk_sengkang_qty;
        $b = ((3.14*$datakol[1]['dimensi_l'])+(6*$datakol[1]['tulseng_dia_tumpuan']/1000*2))-($datakol[1]['tebal_selimut']*8);
        $Y11 = $a*$b;

        $a = ceil($dim_kol/$datakol[1]['tulseng_dia_jaraklap']*1/5+$datalewat[0]['ls']/$datakol[1]['tulseng_dia_jaraklap']*1/5)*$pk_sengkang_qty;
        $b = ((3.14*$datakol[1]['dimensi_l'])+(6*$datakol[1]['tulseng_dia_lapangan']/1000*2))-($datakol[1]['tebal_selimut']*8);
        $Y12 = $a*$b;

        $a = ceil($dim_kol/$datakol[1]['tulseng_dia_jaraktump']*1/4+$datalewat[0]['ls']/$datakol[1]['tulseng_dia_jaraktump']*1/4)+1*$pk_sengkang_qty;
        $b = ((3.14*$datakol[1]['dimensi_l'])+(6*$datakol[1]['tulseng_dia_tumpuan']/1000*2))-($datakol[1]['tebal_selimut']*8);
        $Y13 = $a*$b;

        $a = ceil($jum_kolom/$datakol[1]['tvtump_jarak']*1/4)+1*$pk_sengkang_qty;
        $b = (6*$datakol[1]['tvtump_dia']/1000*2)+($datakol[1]['dimensi_p']-$datakol[1]['tulseng_dia_jaraktump']*2);
        $Y14 = $a*$b;

        $a = ceil($jum_kolom/$datakol[1]['tvlap_jarak']*1/5)*$pk_sengkang_qty;
        $b = (6*$datakol[1]['tvlap_dia']/1000*2)+($datakol[1]['dimensi_p']-$datakol[1]['tulseng_dia_jaraktump']*2);
        $Y15 = $a*$b;

        $a = ceil($jum_kolom/$datakol[1]['thtump_jarak']*1/4)+1*$pk_sengkang_qty;
        $b = ((6*$datakol[1]['thtump_dia']/1000*2)+($datakol[1]['dimensi_p']-$datakol[1]['tulseng_dia_jaraktump']*2)*2);
        $Y16 = $a*$b;

        $a = ceil($jum_kolom/$datakol[1]['thlap_jarak']*1/5)*$pk_sengkang_qty;
        $b = ((6*$datakol[1]['thlap_dia']/1000*2)+($datakol[1]['dimensi_p']-$datakol[1]['tulseng_dia_jaraktump']*2)*2);
        $Y17 = $a*$b; 


        $b1 = (0.25*3.14*$datakol[1]['tulseng_dia_tumpuan']*$datakol[1]['tulseng_dia_tumpuan']*0.00785)*$Y11*$jumkom;
        $b2 = (0.25*3.14*$datakol[1]['tulseng_dia_lapangan']*$datakol[1]['tulseng_dia_lapangan']*0.00785)*$Y12*$jumkom;
        $b3 = (0.25*3.14*$datakol[1]['tulseng_dia_tumpuan']*$datakol[1]['tulseng_dia_tumpuan']*0.00785)*$Y13*$jumkom ;
        $b4 = (0.25*3.14*$datakol[1]['tvtump_dia']*0.00785)*$Y14*$jumkom ;
        $b5 = (0.25*3.14*$datakol[1]['tvlap_dia']*0.00785)*$Y15*$jumkom;
        $b6 = (0.25*3.14*$datakol[1]['thtump_dia']*0.00785)*$Y16*$jumkom;
        $b7 = (0.25*3.14*$datakol[1]['thlap_dia']*0.00785)*$Y17*$jumkom;

        $tos32_tamp_berat = $b1 + $b2 + $b3 + $b4 + $b5 + $b6 + $b7;

        $beton_bundar = 3.14 * (0.5 * $datakol[1]['dimensi_l']) * (0.5 * $datakol[1]['dimensi_l']) * $jum_kolom * $dim_kol;
        
        $beton_kotak = ($datakol[1]['dimensi_l'] * $datakol[1]['dimensi_p'] * $dim_kol * $jum_kolom);
        

        $bekisting_bundar = (3.14 * $datakol[1]['dimensi_l']) * ($dim_kol - $tebal_plat) * $jum_kolom ;
        $bekisting_kotak = (($datakol[1]['dimensi_l'] + $datakol[1]['dimensi_p']) * 2 * ($dim_kol - $tebal_plat)) * $jum_kolom;

        

       // besi  -->
        // echo "part 1 : ".(0.25*3.14*$datakol[1]['tulpok_dia']*$datakol[1]['tulpok_dia']*0.00785)*($datalewat[]['ls']+$dim_kol+(28*($datakol[1]['tulpok_dia']*0.001))+(8*($datakol[1]['tulpok_dia']*0.001)))*$datakol[1]['tulpok_jum']*$jum_kolom ;

        // echo "<br> <br> Q18 :".$datalewat[]['ls'];
        // echo "<br> D18 :".$dim_kol." tulpok jum ".$datakol[1]['tulpok_jum'];
        // echo "<br> R18 :".((28*($datakol[1]['tulpok_dia']*0.001))+(8*($datakol[1]['tulpok_dia']*0.001)));
        // echo "<br> S18 :".(round($datalewat[]['ls'],2)+round($dim_kol,2)+round((28*($datakol[1]['tulpok_dia']*0.001))+(8*($datakol[1]['tulpok_dia']*0.001)),2));
        // dd($datalewat);
        $besi = round((0.25*3.14*$datakol[1]['tulpok_dia']*$datakol[1]['tulpok_dia']*0.00785)*($datalewat[0]['ls']+$dim_kol+(28*($datakol[1]['tulpok_dia']*0.001))+(8*($datakol[1]['tulpok_dia']*0.001)))*$datakol[1]['tulpok_jum']*$jum_kolom,2) + $tos32_tamp_berat;
        echo $besi;
        
        
        // beton  -->
                                                                                   
        if ($datakol[1]['bentuk'] == 'Kotak') {
            $beton = round($beton_kotak, 2);
        } else {
            $beton = round($beton_bundar, 2);
        }
         // bekissting  -->                                                                                   
        if ($datakol[1]['bentuk'] == 'Kotak') {
            $bekisting = round($bekisting_kotak, 2);
        } else {
            $bekisting = round($bekisting_bundar, 2);
        }

        // rasio besi  -->
        $rasio_b = round($besi/$beton_kotak,2);

        tos3pumproom::all()->where("id_tos24", $req->idt)->first()->update([
            'tipe_kolom' => $req->tipe_kolom,
            'tebal_plat' => $req->tebal_plat,
            'jum_kolom' => $req->jum_kolom,
            'pk_sengkang_qty' => $req->pk_sengkang_qty,
            'besi' => $besi,
            'beton' => $beton,
            'bekisting' => $bekisting,
            'rasio_b' => $rasio_b

        ]);
        return redirect('/target');
    }


    // Tos 3 Lewatan
    public function in_tos35(Request $req)
    {
        $hasil = [
            'project_id' => $req->cari,
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
