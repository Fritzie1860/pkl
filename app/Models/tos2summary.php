<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos2summary extends Model
{
    use HasFactory;
    protected $table="tos2summary";
    protected $primaryKey = 'id_tos23';
    public $timestamps = false;
    
    protected $fillable = [
        'nama', 
        'beton',
        'besi',
        'bekisting',
        'timbunan',
    ];
}
