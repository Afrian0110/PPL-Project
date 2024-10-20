<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPLxPBKK</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            width: 100%;
        }

        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
            color: #ffb200;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], input[type="date"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: -15px;
            margin-bottom: 15px;
        }

        .submit-btn {
            width: 100%;
            background-color: #ffb200;
            border: none;
            padding: 15px;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #e09d00;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <form action="{{route('store')}}" method="post">
        @csrf

        <h1>Form Peminjaman</h1>

        <div class="form-group">
            <label for="Nama_Peminjam">Nama Peminjam:</label>
            <input type="text" name="Nama_Peminjam" id="Nama_Peminjam" placeholder="Nama Peminjam">
        </div>

        <div class="form-group">
            <label for="Peminjaman">Peminjaman:</label>
            <select name="Peminjaman" id="Peminjaman">
                <option value="Gedung">Gedung</option>
                <option value="Ruangan">Ruangan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Tanggal_Peminjaman">Tanggal Peminjaman:</label>
            <input type="date" name="Tanggal_Peminjaman" id="Tanggal_Peminjaman">
        </div>

        <div class="form-group">
            <label for="durasi_peminjaman">Durasi Peminjaman (hari):</label>
            <input type="number" name="durasi_peminjaman" id="durasi_peminjaman" placeholder="Durasi Peminjaman">
        </div>

        <div class="form-group">
            <label for="status_peminjaman">Status Peminjaman:</label>
            <select name="status_peminjaman" id="status_peminjaman">
                <option value="Diajukan">Diajukan</option>
                <option value="Disetujui">Disetujui</option>
                <option value="Ditolak">Ditolak</option>
            </select>
        </div>

        <div class="checkbox-group">
            <input type="checkbox" id="terverifikasi" name="terverifikasi" value="1">
            <label for="terverifikasi">Terverifikasi</label>
        </div>

        <div class="form-container">
            <input type="submit" class="submit-btn" value="Simpan">
        </div>
    </form>
</body>
</html>
