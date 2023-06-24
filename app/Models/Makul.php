<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'kode_mk',
        'matkul',
        'kelas',
        'dosen_pengampu',
        'hari',
        'ruang',
        'jam',
        'sks'
       ];
}
