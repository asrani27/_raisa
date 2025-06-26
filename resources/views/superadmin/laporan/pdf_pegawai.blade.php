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
    <h3 style="text-align: center">DATA PEGAWAI
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>#</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>jkel</th>
            <th>status</th>
            <th>Agama</th>
            <th>Telp</th>
            <th>Alamat</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{1 + $key}}</td>
            <td>{{$item->nik}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->tempat_lahir}}</td>
            <td>{{\Carbon\Carbon::parse($item->tanggal_lahir)->format('d M Y')}}</td>
            <td>{{$item->jkel}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->agama}}</td>
            <td>{{$item->telp}}</td>
            <td>{{$item->alamat}}</td>
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