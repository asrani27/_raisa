<?php

namespace App\Http\Controllers;

use App\Models\Penempatan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;

class PenempatanController extends Controller
{

    public function index()
    {
        $data = Penempatan::orderBy('id', 'DESC')->paginate(10);

        return view('superadmin.penempatan.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.penempatan.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Penempatan::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/penempatan');
    }
    public function edit($id)
    {
        $data = Penempatan::find($id);
        return view('superadmin.penempatan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Penempatan::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/penempatan');
    }
    public function delete($id)
    {
        Penempatan::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/penempatan');
    }

    public function print()
    {
        $data = Penempatan::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_penempatan', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
