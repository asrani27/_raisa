<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>

<body>

    <table width="100%">
        <tr>
            <td width="15%">
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('logo/bank.png'))) }}"
                    width="80px">
            </td>
            <td style="text-align: center;" width="60%">

                <font size="20px"><b>BANK KAL-SEL<br />
                    </b></font>

            </td>
            <td width="15%">
            </td>
        </tr>
    </table>
    <hr>
    <h3 style="text-align: center">DATA PENEMPATAN
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
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
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{1 + $key}}</td>
            <td>{{$item->kode}}</td>
            <td>{{$item->pegawai == null ? '': $item->pegawai->nama}}</td>
            <td>{{$item->lokasi}}</td>
            <td>{{$item->jabatan}}</td>
            <td>{{$item->cabang}}</td>
            <td>{{$item->kota}}</td>
            <td>{{$item->tahun}}</td>
            <td>{{$item->status}}</td>
        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td><br />Banjarmasin, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br />
                Pimpinan<br /><br /><br /><br />

                <u>-</u><br />
                NIP.xxxxxxxxx
            </td>
        </tr>
    </table>
</body>

</html>