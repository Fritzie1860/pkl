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
            'footplat_type',
            'pk_sengkang_qty',
    ];

    public function detil () {
        return tos3ground::join('tos3data', 'tos3ground.tipe_kolom', '=', 'tos3data.nama')->
        join('tos3lewatan', 'tos3data.tulpok_dia', '=', 'tos3lewatan.dia')->get();
    }
}
