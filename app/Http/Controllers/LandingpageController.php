<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandingpageController extends Controller
{
    public function index()
    {
        $tentang = Tentang::all();
        return view('admin.Landingpage.Tentang.tentang', compact('tentang'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'gambar' => 'mimes:jpg,jpeg,png',
            'heading' => 'required',
            'deskripsi' => 'required',

        ]);

        if ($request->file("gambar")){
         $data = $request->file("gambar")->store("tentang");
        }
        Tentang::create([
            'gambar' => $data,
            'heading' => $request->heading,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->back()->with('success', 'Data berhasil ditambahkan' );
    }

    public function edit(Request $request){
        $data = [
            "edit" => Tentang::where("id", $request->id)->first()
        ];

        return view("admin.Landingpage.Tentang.edit", $data);
    }

    public function update(Request $request){

    if($request->file('gambar_new')){
        if ($request->gambar) {
            Storage::delete($request->gambar);
        }
        $data = $request->file('gambar_new')->store('tentang');
    }
    else{
        $data = $request->gambar;
    }
    Tentang::where('id', $request->id)->update([
        "heading" => $request->heading,
        "deskripsi" => $request->deskripsi,
        "gambar" => $data
    ]);

    return back()->with('berhasil', 'Data berhasil diupdate');
    }

}