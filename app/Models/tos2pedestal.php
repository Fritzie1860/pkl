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
            'bentuk_kolom',
            'dk_t',
            'dk_l',
            'dk_p',
            'tebal_plat',
            'tinggi_net',
            'selimut_beton',
            'jum_kolom',
            'footplat_type',
            'footplat_b',
            'footplat_h',
            'footplat_p',
            'pk_ket',
            'pk_tulpok_dia',
            'pk_tulpok_qty',
            'pk_sengkang_dia',
            'pk_sengkang_qty',
            'pk_sengkang_jarak',
            'pk_tulanganpokok_ovlp',
            'pk_tulanganpokok_suk',
            'pk_tulanganpokok_kkf',
            'pk_tulanganpokok_p_besi',
            'pk_tulanganpokok_total_p',
            'pk_tulanganpokok_berat',
            'pk_sengkang2_tekukan_id',
            'pk_sengkang2_tekukan_p',
            'pk_sengkang2_qty',
            'pk_sengkang2_total_p',
            'pk_sengkang2_berat',
            'besi',
            'beton',
            'bekisting',
            'timbunan',
            'rasio_besi',
    ];
}
