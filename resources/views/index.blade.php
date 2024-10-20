<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi Peminjaman</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #ff9800;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #ff9800;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #ff9800;
        }
        button {
            background-color: #ff9800;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #e68900;
        }
        .btn-container {
            display: flex;
            gap: 10px;
        }
        .add-btn {
            display: block;
            width: max-content;
            margin: 20px auto;
            text-align: center;
            background-color: #ff9800;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            text-transform: uppercase;
        }
        .add-btn:hover {
            background-color: #e68900;
        }
    </style>
</head>
<body>
    <h1>Sistem Informasi Peminjaman Gedung dan Ruangan Universitas Bengkulu</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Peminjam</th>
                <th>Peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Durasi Peminjaman</th>
                <th>Status Peminjaman</th>
                <th>Terverifikasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dt)
            <tr>
                <td>{{ $dt->Peminjam->nama}}</td>
                <td>{{ $dt->Peminjaman }}</td>
                <td>{{ $dt->Tanggal_Peminjaman }}</td>
                <td>{{ $dt->durasi_peminjaman }}</td>
                <td>{{ $dt->status_peminjaman }}</td>
                <td>{{ $dt->terverifikasi ? 'Terverifikasi' : 'Tidak Terverifikasi' }}</td>
                <td class="btn-container">
                    <a href="{{ route('edit', $dt->id) }}"><button>Edit</button></a>
                    <form action="{{ route('destroy', $dt->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('create') }}" class="add-btn">Tambah</a>
</body>
</html>
