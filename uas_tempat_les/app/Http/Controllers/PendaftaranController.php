<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftaran = pendaftaran::all();
        return view("pendaftaran.index")->with("pendaftaran", $pendaftaran);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pendaftaran $pendaftaran)
    {
        //
    }
}
