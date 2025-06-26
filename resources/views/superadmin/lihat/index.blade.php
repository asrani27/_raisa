@extends('layouts.app')

@section('content')
<div class="row">
    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Lihat dan Cetak Surat</h5>
                <div class="card-header-right">


                </div>
            </div>
            <div class="card-body table-border-style">
                <form method="post" action="/superadmin/lihat">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label">Kota</label>
                                <select class="form-control" name="penempatan_id" required>
                                    <option value="">-</option>
                                    @foreach (penempatan() as $item)
                                    <option value="{{$item->id}}" {{old('penempatan_id')==$item->id ?
                                        'selected':''}}>{{$item->kota}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="floating-label" for="Email">lama kerja</label>
                                <input type="text" class="form-control" name="lama" value="{{old('lama')}}" required
                                    onkeypress="return hanyaAngka(event)" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="button" value="lihat">Lihat</button>
                                <button type="submit" class="btn btn-danger" name="button" value="cetak">Cetak</button>
                            </div>
                        </div>
                    </div>



            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body table-border-style">
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key=> $item)
                        <tr>
                            <td>{{1 + $key}}</td>
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
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
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