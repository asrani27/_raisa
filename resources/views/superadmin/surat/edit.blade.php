@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Edit Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/superadmin/surat/edit/{{$data->id}}">
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
                            <label class="floating-label">penempatan</label>
                            <select class="form-control" name="penempatan_id">
                                <option value="">-</option>
                                @foreach (penempatan() as $item)
                                <option value="{{$item->id}}" {{$data->penempatan_id == $item->id ?
                                    'selected':''}}>{{$item->lokasi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">jenis surat</label>
                            <input type="text" class="form-control" name="jenis" value="{{$data->jenis}}">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Tgl Awal</label>
                            <input type="date" class="form-control" name="awal" value="{{$data->awal}}">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Tgl Akhir</label>
                            <input type="date" class="form-control" name="akhir" value="{{$data->akhir}}">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">lama</label>
                            <input type="text" class="form-control" name="lama" value="{{$data->lama}}" onkeypress="return hanyaAngka(event)" />
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">gaji</label>
                            <input type="text" class="form-control" name="gaji" value="{{$data->gaji}}"
                                onkeypress="return hanyaAngka(event)" />
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">tunjangan</label>
                            <input type="text" class="form-control" name="tunjangan" value="{{$data->tunjangan}}"
                                onkeypress="return hanyaAngka(event)" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/superadmin/surat" class="btn btn-secondary">Kembali</a>
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