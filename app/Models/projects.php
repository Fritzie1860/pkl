<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_nama',
        'tanggal_mulai',
        'pro_status',
        'pro_update',
    ];

    
}
