<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_projects';
    public $timestamps = false;
    protected $fillable = [
        'pro_nama',
        'tanggal_mulai',
        'pro_status',
        'pro_update',
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


}
