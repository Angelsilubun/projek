<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index()
    {
        return view('superadmin.index');
    }
    public function dasboard()
    {
        return view('superadmin.index');
    }

    public function profile()
    {
        return view('superadmin.profil');
    }

    // public function setting()
    // {
    //     return view('admin.setting');
    // }

    public function payment()
    {
        return view('superadmin.Data.payment');
    }

    public function order()
    {
        return view('superadmin.Data.order');
    }

    // public function pengaturanuser()
    // {
    //     return view('admin.pengaturan-user');
    // }

    // public function barang()
    // {
    //     return view('admin.barang');
    // }

    // public function home()
    // {
    //     return view('admin.home');
    // }

    // public function bangunan()
    // {
    //     return view('admin.bangunan');
    // }

    public function pickup()
    {
        return view('superadmin.Vendor.pickup');
    }

    public function transaksi()
    {
        return view('superadmin.Vendor.transaksi');
    }

    public function laporan()
    {
        return view('superadmin.laporan');
    }

    public function vendor()
    {
        return view('superadmin.Vendor.vendor');
    }
}
