<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function maps()
    {
        return view('layouts.map');
    }
}