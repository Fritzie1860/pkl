<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos1batukali extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tos14';
    public $timestamps = false;
    protected $table = "tos1batukali";
    
    protected $fillable = [
       
           'nama',
           'bentuk',
           'b',
           'b_',
           'h',
           'p',
           'la',
           'v_bk',
           'pasir_u',
           'galian',
           'timbunan',
    ];
}
