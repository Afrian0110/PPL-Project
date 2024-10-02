<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<H1>Sistem Informasi Peminjaman Gedung dan Ruangan Universitas Bengkulu</H1>

<table>
    <thead>
        <tr>judul</tr>
        <tr>penulis</tr>
        <tr>penerbit</tr>
        <tr>sinopsis</tr>
        <tr>tahun</tr>
        <tr>stok</tr>
        <tr>status</tr>
    </thead>
    <tbody>
        @foreach ($data as $dt)
        <tr>
            <td>{{$dt->judul}}</td>
            <td>{{$dt->penulis}}</td>
            <td>{{$dt->penerbit}}</td>
            <td>{{$dt->sinopsis}}</td>
            <td>{{$dt->tahun}}</td>
            <td>{{$dt->stok}}</td>
            <td>{{$dt->status}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>