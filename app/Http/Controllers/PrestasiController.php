<?php

namespace App\Http\Controllers;

use App\Models\prestasi;
use App\Http\Requests\StoreprestasiRequest;
use App\Http\Requests\UpdateprestasiRequest;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Prestasi::all();
        return view ('prestasi.index',compact('query'));
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $query = Prestasi::all();
        return view('prestasi.tambah',compact('query'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $rules = [
        //     'nama_santri' => 'required',
        //     'nama_prestasi' => 'required',
        ];
        $message = [
            'required' => 'data yang di input tidak sesuai'
        ];

        $this->validate($request, $rules, $message);

        $prestasi = new prestasi();
        $test = 1;

        $prestasi->nama_santri = $request->nama_santri;
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->kategori_prestasi = $request->kategori_prestasi;
        $prestasi->keterangan_prestasi = $request->keterangan_prestasi;

        $prestasi->save(); 

        return redirect()->route('prestasi')->with('add','Data Prestasi Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view('prestasi.detail',compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = Prestasi::findOrFail($id);
        $query = Prestasi::all();
        return view ('prestasi.edit',compact('edit'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $prestasi = prestasi::findOrFail($id); 
        $prestasi->nama_santri = $request->nama_santri;
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->kategori_prestasi = $request->kategori_prestasi;
        $prestasi->keterangan_prestasi = $request->keterangan_prestasi;

        $prestasi->save();
        return redirect()->route('prestasi')->with('success','Data Prestasi Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hapus = prestasi::findOrFail($id);
        $hapus->delete();
        return redirect()->route('prestasi')->with('destroy','Data Prestasi Berhasil dihapus');
    }
}
