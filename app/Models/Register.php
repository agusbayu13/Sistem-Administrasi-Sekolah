<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = "register";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nip', 'email', 'password', 'email_verified_at'
    ];
}
