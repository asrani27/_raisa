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
    <h3 style="text-align: center">DATA SURAT
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
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
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
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