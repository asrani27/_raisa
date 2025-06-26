<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LihatController extends Controller
{
    public function index()
    {
        $data = [];
        return view('superadmin.lihat.index', compact('data'));
    }
    public function lihat(Request $req)
    {
        if ($req->button == 'lihat') {
            $data = Surat::where('penempatan_id', $req->penempatan_id)->where('lama', $req->lama)->get();
            $req->flash();
            return view('superadmin.lihat.index', compact('data'));
        } else {
            $data = Surat::where('penempatan_id', $req->penempatan_id)->where('lama', $req->lama)->get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_lihat', compact('data'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
    }
}
