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
    <form action="{{ route('update', $peminjaman->id) }}" method="POST">
        @method('PUT')
        @csrf

        <h1>Form Peminjaman</h1>
        
        <div class="form-group">
            <label for="Nama_Peminjam">Nama Peminjam:</label>
            <input type="text" name="Nama_Peminjam" id="Nama_Peminjam" value="{{ old('Nama_Peminjam', $peminjaman->Nama_Peminjam) }}">
            @error('Nama_Peminjam')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="Peminjaman">Peminjaman:</label>
            <select name="Peminjaman" id="Peminjaman">
                <option value="Gedung" {{ old('Peminjaman', $peminjaman->Peminjaman) == 'Gedung' ? 'selected' : '' }}>Gedung</option>
                <option value="Ruangan" {{ old('Peminjaman', $peminjaman->Peminjaman) == 'Ruangan' ? 'selected' : '' }}>Ruangan</option>
            </select>
            @error('Peminjaman')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="Tanggal_Peminjaman">Tanggal Peminjaman:</label>
            <input type="date" name="Tanggal_Peminjaman" id="Tanggal_Peminjaman" value="{{ old('Tanggal_Peminjaman', $peminjaman->Tanggal_Peminjaman) }}">
            @error('Tanggal_Peminjaman')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="durasi_peminjaman">Durasi Peminjaman (hari):</label>
            <input type="number" name="durasi_peminjaman" id="durasi_peminjaman" value="{{ old('durasi_peminjaman', $peminjaman->durasi_peminjaman) }}">
            @error('durasi_peminjaman')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="status_peminjaman">Status Peminjaman:</label>
            <select name="status_peminjaman" id="status_peminjaman">
                <option value="Diajukan" {{ old('status_peminjaman', $peminjaman->status_peminjaman) == 'Diajukan' ? 'selected' : '' }}>Diajukan</option>
                <option value="Disetujui" {{ old('status_peminjaman', $peminjaman->status_peminjaman) == 'Disetujui' ? 'selected' : '' }}>Disetujui</option>
                <option value="Ditolak" {{ old('status_peminjaman', $peminjaman->status_peminjaman) == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
            </select>
            @error('status_peminjaman')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="checkbox-group">
            <input type="checkbox" id="terverifikasi" name="terverifikasi" value="1" {{ old('terverifikasi', $peminjaman->terverifikasi) ? 'checked' : '' }}>
            <label for="terverifikasi">Terverifikasi</label>
            @error('terverifikasi')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-container">
            <input type="submit" class="submit-btn" value="Simpan">
        </div>
    </form>
</body>
</html>
