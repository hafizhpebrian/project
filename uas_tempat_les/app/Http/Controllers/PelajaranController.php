<?php

namespace App\Http\Controllers;

use App\Models\pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelajaran = pelajaran::all();
        return view("pelajaran.index")->with("pelajaran",$pelajaran);
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
    public function show(pelajaran $pelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pelajaran $pelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pelajaran $pelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pelajaran $pelajaran)
    {
        //
    }
}
