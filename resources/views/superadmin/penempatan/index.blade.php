@extends('layouts.app')

@section('content')
<div class="row">
    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Data penempatan</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">

                        <a href="/superadmin/penempatan/add" class="btn btn-primary">Tambah</a>
                        <a href="/superadmin/penempatan/print" class="btn btn-danger" target="_blank">PRINT</a>

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
                                <th>Lokasi</th>
                                <th>Jabatan</th>
                                <th>Cabang</th>
                                <th>Kota</th>
                                <th>Tahun</th>
                                <th>Status</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key=> $item)
                            <tr>
                                <td>{{$data->firstItem() + $key}}</td>
                                <td>{{$item->kode}}</td>
                                <td>{{$item->pegawai == null ? '': $item->pegawai->nama}}</td>
                                <td>{{$item->lokasi}}</td>
                                <td>{{$item->jabatan}}</td>
                                <td>{{$item->cabang}}</td>
                                <td>{{$item->kota}}</td>
                                <td>{{$item->tahun}}</td>
                                <td>{{$item->status}}</td>
                                <td>
                                    <a href="/superadmin/penempatan/edit/{{$item->id}}"
                                        class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                    <a href="/superadmin/penempatan/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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