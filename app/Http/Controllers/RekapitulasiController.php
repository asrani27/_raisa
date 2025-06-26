<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Penempatan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;

class RekapitulasiController extends Controller
{
    public function index()
    {
        return view('superadmin.rekapitulasi.index');
    }
    public function kota()
    {
        $kota = request()->get('kota');
        $data = Penempatan::where('kota', 'LIKE', '%' . $kota . '%')->get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_wilayah', compact('data', 'kota'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function cabang()
    {
        $cabang = request()->get('cabang');
        $data = Penempatan::where('cabang', 'LIKE', '%' . $cabang . '%')->get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_cabang', compact('data', 'cabang'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function nik()
    {
        $nik = request()->get('nik');
        $pegawai_id = Pegawai::where('nik', $nik)->first();
        if ($pegawai_id == null) {
            Session::flash('error', 'NIK tidak ditemukan');
            request()->flash();
            return back();
        } else {
            $data = Penempatan::where('pegawai_id', $pegawai_id->id)->get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_nik', compact('data', 'nik'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
    }
}
