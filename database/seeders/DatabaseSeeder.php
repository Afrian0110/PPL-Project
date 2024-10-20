<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peminjaman;
use App\Models\Peminjam;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $peminjam1 = Peminjam::create([
            'nama'=> 'Aldi Pramono',
        ]);

        Peminjaman::create([
            'peminjaman' => 'Gedung',
            'tanggal_peminjaman' => '2023-01-01',
            'durasi_peminjaman' => 7,
            'status_peminjaman' => 'Diajukan',
            'terverifikasi' => 0,
            'peminjam_id' => $peminjam1->id
        ]);
    }
}
