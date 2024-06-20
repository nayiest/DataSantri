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
        $pelanggaran->deskripsi_pelanggaran = $request->deskripsi_pelanggaran;


        $pelanggaran->save();

        return redirect()->route('pelanggaran')->with('add','Data Pelanggaran Santri Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pelanggaran = pelanggaran::findOrFail($id);

        return view('pelanggaran.detail',compact('pelanggaran'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = pelanggaran::findOrFail($id);
        $query = pelanggaran::all();
        return view ('pelanggaran.edit',compact('edit'));
        return view ('pelanggaran.edit',compact('query'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pelanggaran = pelanggaran::findOrFail($id); 
        $pelanggaran->nama_santri = $request->nama_santri;
        $pelanggaran->nama_pelanggaran = $request->nama_pelanggaran;
        $pelanggaran->kategori_pelanggaran = $request->kategori_pelanggaran;

        $pelanggaran->save();
        return redirect()->route('pelanggaran')->with('success','Data Pelanggaran Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hapus = pelanggaran::findOrFail($id);
        $hapus->delete();
        return redirect()->route('pelanggaran')->with('destroy','Data Pelanggaran Berhasil dihapus');
    }
}
