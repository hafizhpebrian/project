<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class SiswaController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = siswa::all();
        return view("siswa.index")->with("siswa", $siswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("siswa.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nama" => "required|unique:siswa",
            "tanggal_lahir" => "required",
            "nomor_telepom" => "required",
            "email" => "required"
        ]);
        
        siswa::create($validasi);
        return redirect("siswa")->with("success","data siswa berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'siswa a.n. '. $siswa->nama.' berhasil dihapus.');
    }
}
