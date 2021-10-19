<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tos2datafootplat extends Model
{
    use HasFactory;
    protected $table="tos2datafootplat";
    protected $primaryKey = 'id_tos25';
    public $timestamps = false;
    
    protected $fillable = [
        'nama',
        'b',
        'h',
        't'
    ];
}
