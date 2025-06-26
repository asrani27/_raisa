@extends('layouts.app')

@section('content')
<div class="row">
    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Data pegawai</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">

                        <a href="/superadmin/pegawai/add" class="btn btn-primary">Tambah</a>
                        <a href="/superadmin/pegawai/print" class="btn btn-danger" target="_blank">PRINT</a>
                    </div>
                </div>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>jkel</th>
                                <th>status</th>
                                <th>Agama</th>
                                <th>Telp</th>
                                <th>Alamat</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key=> $item)
                            <tr>
                                <td>{{$data->firstItem() + $key}}</td>
                                <td>{{$item->nik}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->tempat_lahir}}</td>
                                <td>{{\Carbon\Carbon::parse($item->tanggal_lahir)->format('d M Y')}}</td>
                                <td>{{$item->jkel}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->agama}}</td>
                                <td>{{$item->telp}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>
                                    <a href="/superadmin/pegawai/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="/superadmin/pegawai/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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