<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'nis', 
        'nama', 
        'email', 
        'alamat', 
        'kota',
        'image'
       ];
}
