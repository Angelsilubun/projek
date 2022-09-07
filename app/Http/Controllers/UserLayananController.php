<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLayananController extends Controller
{
    public function index()
    {
        return view('user.layanan');
    }
}
