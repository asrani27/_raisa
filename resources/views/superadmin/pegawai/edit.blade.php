@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Edit Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/superadmin/pegawai/edit/{{$data->id}}">
                @csrf
                <div class="row">
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label class="floating-label" for="Email">NIK</label>
                            <input type="text" class="form-control" name="nik" value="{{$data->nik}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$data->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">tempat lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{$data->tempat_lahir}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">tanggal lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir"
                                value="{{$data->tanggal_lahir}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">jkel</label>
                            <select class="form-control" name="jkel" required>
                                <option value="L" {{$data->jkel == 'L' ? 'selected':''}}>laki-laki</option>
                                <option value="P" {{$data->jkel == 'P' ? 'selected':''}}>perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">status</label>
                            <input type="text" class="form-control" name="status" value="{{$data->status}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">agama</label>
                            <select class="form-control" name="agama" required>
                                <option value="ISLAM" {{$data->agama == 'ISLAM' ? 'selected':''}}>ISLAM</option>
                                <option value="KRISTEN" {{$data->agama == 'KRISTEN' ? 'selected':''}}>KRISTEN</option>
                                <option value="HINDU" {{$data->agama == 'HINDU' ? 'selected':''}}>HINDU</option>
                                <option value="BUDHA" {{$data->agama == 'BUDHA' ? 'selected':''}}>BUDHA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Telp</label>
                            <input type="text" class="form-control" name="telp" value="{{$data->telp}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/superadmin/pegawai" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')

@endpush