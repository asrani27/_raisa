<?php

namespace App\Http\Controllers;

use App\Models\Instruktur;
use App\Models\Karyawan;
use App\Models\Pegawai;
use App\Models\Perusahaan;
use App\Models\Peserta;
use App\Models\Skpd;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function superadmin()
    {
        $pegawai = Pegawai::count();
        // $instruktur = Instruktur::count();
        return view('superadmin.home', compact('pegawai'));
    }
}
