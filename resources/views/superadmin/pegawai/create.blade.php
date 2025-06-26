@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Tambah Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/superadmin/pegawai/add">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="Email">NIK</label>
                            <input type="text" class="form-control" name="nik" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Nama</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">tempat lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">tanggal lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir"
                                value="{{\Carbon\Carbon::now()->format('Y-m-d')}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">jkel</label>
                            <select class="form-control" name="jkel" required>
                                <option value="L">laki-laki</option>
                                <option value="P">perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">status</label>
                            <input type="text" class="form-control" name="status" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">agama</label>
                            <select class="form-control" name="agama" required>
                                <option value="ISLAM">ISLAM</option>
                                <option value="KRISTEN">KRISTEN</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Telp</label>
                            <input type="text" class="form-control" name="telp" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Alamat</label>
                            <input type="text" class="form-control" name="alamat" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
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