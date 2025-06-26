@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Tambah Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/superadmin/surat/add">
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
                            <label class="floating-label">penempatan</label>
                            <select class="form-control" name="penempatan_id">
                                <option value="">-</option>
                                @foreach (penempatan() as $item)
                                <option value="{{$item->id}}">{{$item->lokasi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">jenis surat</label>
                            <input type="text" class="form-control" name="jenis" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Tgl Awal</label>
                            <input type="date" class="form-control" name="awal"
                                value="{{\Carbon\Carbon::now()->format('Y-m-d')}}">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Tgl Akhir</label>
                            <input type="date" class="form-control" name="akhir"
                                value="{{\Carbon\Carbon::now()->format('Y-m-d')}}">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">lama</label>
                            <input type="text" class="form-control" name="lama" required
                                onkeypress="return hanyaAngka(event)" />
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">gaji</label>
                            <input type="text" class="form-control" name="gaji" required
                                onkeypress="return hanyaAngka(event)" />
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">tunjangan</label>
                            <input type="text" class="form-control" name="tunjangan" required
                                onkeypress="return hanyaAngka(event)" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
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
<script>
    function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
</script>
@endpush