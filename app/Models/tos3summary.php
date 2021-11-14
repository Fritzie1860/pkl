<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos3summary extends Model
{
    use HasFactory;
    protected $table="tos3summary";
    protected $primaryKey = 'id_tos34';
    public $timestamps = false;
    
    protected $fillable = [
        'nama', 
        'beton',
        'besi',
        'bekisting',
    ];
}
