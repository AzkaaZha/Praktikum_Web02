<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarAnggotaController extends Controller
{
    public function index()
    {
        return view('admin.daftar_anggota');
    }
}
