<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('user.index');
    // }
    public function index(Request $request)
    {
        $data = [
            'hero1' => 'Bingung mau nitip barang dimana?',
            'hero2' => 'Titipsini aja',
            'hero3' => 'Semua barang bisa dititipkan termasuk barang, rumah dan kendaraan',
        ];

        return view('user.index', [
            'data' => $data,
        ]);
    }
}
