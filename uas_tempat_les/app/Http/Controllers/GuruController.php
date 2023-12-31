<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = guru::all();
        return view("guru.index")->with("guru",$guru);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("guru.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nama" => "required|unique:guru",
            "tanggal_lahir" => "required",
            "nomor_telepom" => "required",
            "email" => "required"
        ]);
        
        guru::create($validasi);
        return redirect("guru")->with("success","data guru berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(guru $guru)
    {
        $guru->delete();
        return redirect()->route('siswa.index')->with('success', 'guru a.n. '. $guru->nama.' berhasil dihapus.');
    }
}
