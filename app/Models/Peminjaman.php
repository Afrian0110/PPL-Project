<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = [
        'Nama_Peminjam',
        'Peminjaman',
        'Tanggal_Peminjaman',
        'durasi_peminjaman',
        'status_peminjaman',
        'terverifikasi'
        ];
}
