<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Peminjaman::all();
        // dd($data);
        return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama_Peminjam' => 'required',
            'Peminjaman' => 'required',
            'Tanggal_Peminjaman' => 'required',
            'durasi_peminjaman' => 'required',
            'status_peminjaman' => 'required',
            'terverifikasi'=>'boolean'
        ]);

        $validate ['terverifikasi'] = $request->has('terverifikasi') ? 1 : 0;

        $Peminjaman = Peminjaman::create($request->all());
        if($Peminjaman){
            return redirect()->route('peminjaman')->with('success', 'Peminjaman Geduang atau Ruangan berhasil');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
