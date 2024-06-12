<?php

namespace App\Http\Controllers;

use App\Models\pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $query = pelanggaran::all();
    
        return view('pelanggaran.index',compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $query = pelanggaran::all();
        return view('pelanggaran.tambah',compact('query'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelanggaran = new Pelanggaran;

        $pelanggaran->nama_santri = $request->nama_santri;
        $pelanggaran->nama_pelanggaran = $request->nama_pelanggaran;
        $pelanggaran->kategori_pelanggaran = $request->kategori_pelanggaran;


        $pelanggaran->save();

        return redirect()->route('pelanggaran')->with('add','Data Pelanggaran Santri Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(pelanggaran $pelanggaran)
    {
        $pelanggaran = pelanggaran::findOrFail();

        return view('pelanggaran.store',compact('pelanggaran'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pelanggaran $pelanggaran)
    {
        //
    }
}
