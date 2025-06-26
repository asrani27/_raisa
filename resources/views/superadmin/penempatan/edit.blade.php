@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Edit Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/superadmin/penempatan/edit/{{$data->id}}">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="Email">kode</label>
                            <input type="text" class="form-control" name="kode" value="{{$data->kode}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label">pegawai</label>
                            <select class="form-control" name="pegawai_id">
                                <option value="">-</option>
                                @foreach (pegawai() as $item)
                                <option value="{{$item->id}}" {{$data->pegawai_id == $item->id ?
                                    'selected':''}}>{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">lokasi</label>
                            <input type="text" class="form-control" name="lokasi" value="{{$data->lokasi}}">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">jabatan</label>
                            <input type="text" class="form-control" name="jabatan" value="{{$data->jabatan}}">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">cabang</label>
                            <input type="text" class="form-control" name="cabang" value="{{$data->cabang}}">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">kota</label>
                            <input type="text" class="form-control" name="kota" value="{{$data->kota}}">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">tahun</label>
                            <input type="text" class="form-control" name="tahun" value="{{$data->tahun}}">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">status</label>
                            <input type="text" class="form-control" name="status" value="{{$data->status}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/superadmin/penempatan" class="btn btn-secondary">Kembali</a>
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