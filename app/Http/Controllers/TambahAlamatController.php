<?php

namespace App\Http\Controllers;

use App\Models\TambahAlamat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TambahAlamatController extends Controller
{
    public function alamat()
    {
        $alamats = TambahAlamat::all(); //mengambil seluruh data melalui model tambahalamat
        return view('user.profile.alamat.Alamat', compact('alamats'));
    }

    public function tambahalamat(Request $request)
    {
        ///CARA KE-1
        TambahAlamat::insert([
            'users_id' => Auth::user()->id,
            'nama_lengkap' => $request->nama_lengkap,
            'no_telp' => $request->no_telp,
            'detail_alamat' => $request->detail_alamat,
            'catatan' => $request->catatan,
        ]);

        return redirect()->route('user.profile.alamat.Alamat')->with('success', 'Alamat berhasil ditambahkan');
    }
}
