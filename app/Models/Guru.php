<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //use HasFactory;
    protected $table = "Guru";
    protected $primaryKey = "nip";
    protected $fillable = [
        'nama', 'nip', 'jeniskelamin', 'alamat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
