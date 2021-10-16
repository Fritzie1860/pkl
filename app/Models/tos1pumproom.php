<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos1pumproom extends Model
{
    use HasFactory;
    protected $table="tos1pumproom";
    protected $primaryKey = 'id_tos13';
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
