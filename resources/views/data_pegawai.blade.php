<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=2>
    <tr>

    <th>Nama</th>
    <th>Id Pegawai</th>
    <th>jabatan</th>
    <th>umur</th>
    <th>Alamat</th>

    </tr>

    @foreach($pegawai as $p)
        <tr>
        
        <td>{{ $p->Nama_pegawai }}</td>
        <td>{{ $p->Pegawai_id }}</td>
        <td>{{ $p->Jabatan_Pegawai }}</td>
        <td>{{ $p->Umur_pegawai }}</td>
        <td>{{ $p-> alamat_pegawai }}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>