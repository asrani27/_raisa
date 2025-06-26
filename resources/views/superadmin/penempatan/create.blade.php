@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Tambah Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/superadmin/penempatan/add">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="Email">Kode</label>
                            <input type="text" class="form-control" name="kode" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label">pegawai</label>
                            <select class="form-control" name="pegawai_id">
                                <option value="">-</option>
                                @foreach (pegawai() as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">lokasi</label>
                            <input type="text" class="form-control" name="lokasi" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">jabatan</label>
                            <input type="text" class="form-control" name="jabatan" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">cabang</label>
                            <input type="text" class="form-control" name="cabang" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">kota</label>
                            <input type="text" class="form-control" name="kota" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">tahun</label>
                            <input type="text" class="form-control" name="tahun" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">status</label>
                            <input type="text" class="form-control" name="status" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
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