<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos2pedestal extends Model
{
    use HasFactory;
    protected $table="tos2pedestal";
    protected $primaryKey = 'id_tos21';
    public $timestamps = false;

    protected $fillable = [
        'tipe_kolom',
        'tebal_plat',
        'jum_kolom',
        'footplat_type',
        'pk_sengkang_qty',
        'besi',
        'beton',
        'bekisting',
        'rasio_b'
    ];

    public function detil () {
        return tos2pedestal::join('tos2datakolom', 'tos2pedestal.tipe_kolom', '=', 'tos2datakolom.nama')->
        join('tos2datafootplat', 'tos2pedestal.footplat_type', '=', 'tos2datafootplat.nama')->
        join('tos2lewatan', 'tos2datakolom.tulpok_dia', '=', 'tos2lewatan.dia')->get();
    }
    
    public function summarry ($id) {
        return tos2pedestal::select('tipe_kolom as label')
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
