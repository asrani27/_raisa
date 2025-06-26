<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;

class SuratController extends Controller
{

    public function index()
    {
        $data = Surat::orderBy('id', 'DESC')->paginate(10);

        return view('superadmin.surat.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.surat.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Surat::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/surat');
    }
    public function edit($id)
    {
        $data = Surat::find($id);
        return view('superadmin.surat.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Surat::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/surat');
    }
    public function delete($id)
    {
        Surat::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/surat');
    }

    public function print()
    {
        $data = Surat::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_surat', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
