<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos3pumproom extends Model
{
    use HasFactory;
    protected $table="tos3pumproom";
    protected $primaryKey = 'id_tos31';
    public $timestamps = false;

    protected $fillable = [
        'tipe_kolom',
        'tebal_plat',
        'jum_kolom',
        'pk_sengkang_qty',
    ];

    public function detil () {
        return tos3pumproom::join('tos3data', 'tos3pumproom.tipe_kolom', '=', 'tos3data.nama')->
        join('tos3lewatan', 'tos3data.tulpok_dia', '=', 'tos3lewatan.dia')->get();
    }

    public function summarry () {
        return tos3pumproom::select('tipe_kolom as label')
        ->selectRaw("SUM(besi) as total_besi")
        ->selectRaw("SUM(beton) as total_beton")
        ->selectRaw("SUM(bekisting) as total_bekisting")
        ->selectRaw("SUM(rasio_b) as rsaio_b")
        ->groupBy('tipe_kolom')
        ->get();
        ;
    }
}
