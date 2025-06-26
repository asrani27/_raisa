@extends('layouts.app')

@section('content')
<div class="row">
    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Rekap Per Wilayah</h5>
            </div>
            <div class="card-body table-border-style">
                <form method="get" action="/superadmin/rekapitulasi/kota" target="_blank">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="Email">Masukkan Kota</label>
                                <input type="text" class="form-control" name="kota" value="{{old('kota')}}"
                                    placeholder="banjarmasin" required />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger" name="button" value="cetak">Cetak</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Rekap Per Cabang</h5>
            </div>
            <div class="card-body table-border-style">
                <form method="get" action="/superadmin/rekapitulasi/cabang" target="_blank">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="Email">Masukkan cabang</label>
                                <input type="text" class="form-control" name="cabang" value="{{old('cabang')}}"
                                    placeholder="cabang a yani" required />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger" name="button" value="cetak">Cetak</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Rekap Per NIK</h5>
            </div>
            <div class="card-body table-border-style">
                <form method="get" action="/superadmin/rekapitulasi/nik" target="_blank">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="Email">Masukkan nik</label>
                                <input type="text" class="form-control" name="nik" value="{{old('nik')}}"
                                    placeholder="643627819" required />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger" name="button" value="cetak">Cetak</button>
                            </div>
                        </div>
                    </div>

                </form>

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