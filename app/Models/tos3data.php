<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos3data extends Model
{
    use HasFactory;
    protected $table="tos3data";
    protected $primaryKey = 'id_tos31';
    public $timestamps = false;
    
    protected $fillable = [
        'nama',
        'bentuk',
        'dimensi_l',
        'dimensi_p',
        'tebal_selimut',
        'tulpok_dia',
        'tulpok_jum',
        'tulseng_dia_tumpuan',
        'tulseng_dia_lapangan',
        'tulseng_dia_jaraklap',
        'tulseng_dia_jaraktump',
        'thtump_dia',
        'thtump_jarak',
        'thlap_dia',
        'thlap_jarak',
        'tvtump_dia',
        'tvtump_jarak',
        'tvlap_dia',
        'tvlap_jarak'
    ];
}
