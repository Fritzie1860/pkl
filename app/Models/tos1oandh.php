<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\tos1oandh;
// use GuzzleHttp\Psr7\Request;

class tos1oandh extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tos11';
    public $timestamps = false;
    protected $table = "tos1oandh";
    
    protected $fillable = [
        'id_tos11',
        'dia',
        'p',
    ];

}
