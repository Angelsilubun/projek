<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    
    // menggunakan ini agar semua file atau softfile bisa dimasukan semua kedalem database
    protected $guarded = []; 
    protected $dates = ['created_at'];
}
