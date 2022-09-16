<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TambahAlamat extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
       'users_id', 
       'nama_lengkap', 
       'no_telp', 
       'detail_alamat', 
       'catatan',
    ];

}
