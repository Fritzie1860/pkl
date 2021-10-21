<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos2kolompedestal extends Model
{
    use HasFactory;
    protected $table="tos2kolompedestal";
    protected $primaryKey = 'id_tos22';
    public $timestamps = false;

    protected $fillable = [
            'tipe_kolom',
            'tebal_plat',
            'jum_kolom',
            'footplat_type',
            'pk_sengkang_qty',
    ];

    public function detil () {
        return tos2kolompedestal::join('tos2datakolom', 'tos2kolompedestal.tipe_kolom', '=', 'tos2datakolom.nama')->
        join('tos2datafootplat', 'tos2kolompedestal.footplat_type', '=', 'tos2datafootplat.nama')->
        join('tos2lewatan', 'tos2datakolom.tulpok_dia', '=', 'tos2lewatan.dia')->get();
    }
}
