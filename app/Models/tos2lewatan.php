<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos2lewatan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tos24';
    public $timestamps = false;
    protected $table = "tos2lewatan";
    
    protected $fillable = [
        'id_tos24',
        'dia',
        'ls',
    ];
}
