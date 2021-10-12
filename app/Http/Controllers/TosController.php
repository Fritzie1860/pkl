<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TosController extends Controller
{
    public function input(Request $req){
        //Koefisien
        $lc=0.05;
        $pasir=0.05;
        // Statis
        $type=$req['type'];
        $dfp_l=$req['dfp_l'];
        $dfp_p=$req['dfp_p'];
        $dfp_t=$req['dfp_t'];
        $level_mta=$req['level_MTA'];
        $jumlah=$req['jumlah'];
        $tav_dia=$req['tav_dia'];
        $tav_jarak=$req['tav_jarak'];
        $tbv_dia=$req['tbv_dia'];
        $tbv_jarak=$req['tbv_jarak'];
        $tbh_dia=$req['tbh_dia'];
        $tbh_jarak=$req['tbh_jarak'];
        $tah_dia=$req['tah_dia'];
        $tah_jarak=$req['tah_jarak'];
        $tp_dia=$req['tp_dia'];
        $tp_jum=$req['tp_jum'];
        // Dinamis
        $tav_p=$dfp_p;
        $tav_add=($dfp_t+(8*$tav_dia*0.001))*2;
        $tav_jum=ceil(($dfp_l/($tav_jarak/1000))+1);
        $tav_bjenis=0.006165*$tav_dia*$tav_dia;
        $tav_total=((($tav_p+$tav_add)*$tav_jum)*$tav_bjenis)*$tav_jum;
        $tbv_p=$dfp_p;
        $tbv_add=($dfp_t+(8*$tbv_dia*0.001))*2;
        $tbv_jum=ceil(($dfp_l/($tbv_jarak/1000))+1);
        $tbv_bjenis=0.006165*$tbv_dia*$tbv_dia;
        $tbv_total=((($tbv_p+$tbv_add)*$tbv_jum)*$tbv_bjenis)*$tbv_jum;
        $tah_p=$dfp_p;
        $tah_add=($dfp_t+(8*$tah_dia*0.001))*2;
        $tah_jum=ceil(($dfp_l/($tah_jarak/1000))+1);
        $tah_bjenis=0.006165*$tah_dia*$tah_dia;
        $tah_total=((($tah_p+$tah_add)*$tah_jum)*$tah_bjenis)*$tah_jum;
        $tbh_p=$dfp_p;
        $tbh_add=($dfp_t+(8*$tbh_dia*0.001))*2;
        $tbh_jum=ceil(($dfp_l/($tbh_jarak/1000))+1);
        $tbh_bjenis=0.006165*$tbh_dia*$tbh_dia;
        $tbh_total=((($tbh_p+$tbh_add)*$tbh_jum)*$tbh_bjenis)*$tbh_jum;
        // $tp_total=(0.006165*$tbh_dia*$tbh_dia*$tp_p)*$jumlah;
        // $tp_p=((($dfp_l+$dfp_p)*2)+($OH_dia*1.5)*4)*$tp_jum;
        // $v_besi=$tbh_total+$tbv_total+$tah_total+$tav_total+$tp_total;
        $v_beton=(($dfp_l*$dfp_p)*$dfp_t)*$jumlah;
        $v_bb=($dfp_p+$dfp_l)*2*0.4*$jumlah;
        $v_galian=($dfp_p*$dfp_l)*($level_mta+$lc+$pasir)*$jumlah;
        $v_lc=($dfp_p*$dfp_l)*$lc*$jumlah;
        $v_pasir=($dfp_l*$dfp_p)*$jumlah;

    }
}
