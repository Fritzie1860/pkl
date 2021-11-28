<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos3ground extends Model
{
    use HasFactory;
    protected $table="tos3ground";
    protected $primaryKey = 'id_tos32';
    public $timestamps = false;

    protected $fillable = [
            'tipe_kolom',
            'tebal_plat',
            'jum_kolom',
            'pk_sengkang_qty',
    ];

    public function detil () {
        return tos3ground::join('tos3data', 'tos3ground.tipe_kolom', '=', 'tos3data.nama')->
        join('tos3lewatan', 'tos3data.tulpok_dia', '=', 'tos3lewatan.dia')->get();
    }

    public function summarry ($id) {
        return tos3ground::select('tipe_kolom as label')
        ->selectRaw("SUM(besi) as total_besi")
        ->selectRaw("SUM(beton) as total_beton")
        ->selectRaw("SUM(bekisting) as total_bekisting")
        ->selectRaw("SUM(rasio_b) as rsaio_b")
        ->groupBy('tipe_kolom')
        ->where('project_id', $id)
        ->get();
        ;
    }
}
