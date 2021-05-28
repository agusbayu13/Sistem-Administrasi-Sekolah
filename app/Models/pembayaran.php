<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
   protected $table = 'pembayaran';
   protected $primaryKey = 'id';
   protected $fillable = ['id', 'nama', 'kelas', 'nis', 'jenis_pembayaran', 'kode_pembayaran', 'tgl_pembayaran', 'bukti_pembayaran', 'total_pembayaran'];
}
