<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos3lewatan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tos35';
    public $timestamps = false;
    protected $table = "tos3lewatan";
    
    protected $fillable = [
        'id_tos35',
        'dia',
        'ls',
    ];
}
