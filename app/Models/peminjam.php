<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjam extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama'
    ];

    public function peminjaman()
    {
        return $this->hasOne(Peminjaman::class);
    }
}
