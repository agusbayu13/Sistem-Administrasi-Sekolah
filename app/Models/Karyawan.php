<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //use HasFactory;
    protected $table = "Karyawan";
    protected $primaryKey = "nip";
    protected $fillable = [
        'nama', 'nip', 'jeniskelamin', 'alamat'
    ];
}
