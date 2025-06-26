@extends('layouts.app')

@section('content')
<div class="row">
    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Data Pembuatan surat</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">

                        <a href="/superadmin/surat/add" class="btn btn-primary">Tambah</a>
                        <a href="/superadmin/surat/print" class="btn btn-danger" target="_blank">PRINT</a>
                    </div>
                </div>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Pegawai</th>
                                <th>Penempatan</th>
                                <th>Jenis Surat</th>
                                <th>Tgl Awal</th>
                                <th>Tgl Akhir</th>
                                <th>Lama</th>
                                <th>Gaji</th>
                                <th>Tunjangan</th>
                                <th>Total</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key=> $item)
                            <tr>
                                <td>{{$data->firstItem() + $key}}</td>
                                <td>{{$item->kode}}</td>
                                <td>{{$item->pegawai == null ? '': $item->pegawai->nama}}</td>
                                <td>{{$item->penempatan == null ? '': $item->penempatan->lokasi . ' - ' .
                                    $item->penempatan->kota}}</td>
                                <td>{{$item->jenis}}</td>
                                <td>{{$item->awal}}</td>
                                <td>{{$item->akhir}}</td>
                                <td>{{$item->lama}}</td>
                                <td>{{number_format($item->gaji)}}</td>
                                <td>{{number_format($item->tunjangan)}}</td>
                                <td>{{number_format($item->gaji + $item->tunjangan)}}</td>
                                <td>
                                    <a href="/superadmin/surat/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="/superadmin/surat/delete/{{$item->id}}" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin ingin dihapus?');"><i
                                            class="fa fa-trash"></i></a>

                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                        {{$data->links()}}
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection