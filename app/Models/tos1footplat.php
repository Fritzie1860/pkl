<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos1footplat extends Model
{
    use HasFactory;
    protected $table="tos1footplat";
    protected $primaryKey = 'id_tos12';
    public $timestamps = false;
    
    protected $fillable = [
        'type',
        'dfp_l',
        'dfp_p',
        'dfp_t',
        'level_mta',
        'jumlah',
        'tav_dia',
        'tav_jarak',
        'tbv_dia',
        'tbv_jarak',
        'tbh_dia',
        'tbh_jarak',
        'tah_dia',
        'tah_jarak',
        'tp_dia',
        'tp_jum'
    ];

}
