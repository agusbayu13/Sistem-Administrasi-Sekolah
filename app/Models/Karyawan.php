<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //use HasFactory;
    protected $table = "Karyawan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'nip', 'jeniskelamin', 'alamat'
    ];
}
