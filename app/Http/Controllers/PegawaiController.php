<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = pegawai::get();
        
        // return $destinations;
        return view('tampil', compact('pegawai'));
        
    }
}
