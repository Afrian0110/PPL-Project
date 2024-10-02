<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPLxPBKK</title>
</head>
<body>
    <form action="{{route('store')}}" method="post">
        @csrf
        <input type="text" name="Nama_Peminjam" placeholder="nama peminjam">
        <select name="Peminjaman">
            <option value="Geduang">Geduang</option>
            <option value="Ruangan">Ruangan</option>
        </select>
        <input type="date" name="Tanggal_Peminjaman" placeholder="masukkan judul">
        <input type="number" name="durasi_peminjaman" placeholder="durasi peminjaman">
        <select name="status_peminjaman">
            <option value="Diajukan">Diajukan</option>
            <option value="Disetujui">Disetujui</option>
            <option value="Ditolak">Ditolak</option>
        </select>
        <label for="terverifikas">terverifikasi:</label>
        <input type="checkbox" id="terverifikas" name="terverifikasi" value="1">
        <input type="submit" value="simpan">
    </form>
</body>
</html>