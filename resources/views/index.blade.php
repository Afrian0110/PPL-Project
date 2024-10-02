<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPLxPBKK</title>
</head>
<body>
    <H1>Sistem Informasi Peminjaman Gedung dan Ruangan Universitas Bengkulu</H1>

<table border="1">
    <thead>
        <th>Nama_Peminjam</th>
        <th>Peminjaman</th>
        <th>Tanggal_Peminjaman</th>
        <th>durasi_Peminjaman</th>
        <th>status_peminjaman</th>
        <th>terverifikas</th>
    </thead>
    <tbody>
        @foreach ($data as $dt)
        <tr>
            <td>{{$dt->Nama_Peminjam}}</td>
            <td>{{$dt->Peminjaman}}</td>
            <td>{{$dt->Tanggal_Peminjaman}}</td>
            <td>{{$dt->durasi_peminjaman}}</td>
            <td>{{$dt->status_peminjaman}}</td>
            <td>{{$dt->terverifikasi ? 'terverifikasi' : 'tidak terverifikasi'}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>