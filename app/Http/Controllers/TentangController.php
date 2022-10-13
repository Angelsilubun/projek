<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
{
    public function index()
    {
        $data = [
            "data_tentang" => Tentang::get()
        ];

        return view("admin.home.Tentang.tentang", $data);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'judul' => '',
        //     'deskripsi' => '',
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("tentang");
        }

        Tentang::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);
        return back()->with('berhasil', 'Data baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Tentang::where("id", $request->id)->first()
        ];

        return view("admin.home.Tentang.edit", $data);
    }

    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'judul' => '',
        //     'deskripsi' => '',
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image_new")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("tentang");
        } else {
            $data = $request->gambarLama;
        }

        Tentang::where("id", $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);

        return back();
    }
    public function destroy(Tentang $tentang)
    {
        //delete image
        Storage::delete('tentang'. $tentang->image);

        //delete post
        $tentang->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }
}
