<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Http\Requests\StoreSantriRequest;
use App\Http\Requests\UpdateSantriRequest;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Santri::all();
        return view ('datasantri.index',compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $querysantri = Santri::all();
        return view('datasantri.tambah',compact('querysantri'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function __construct(){
        $this->santri = new Santri;
    }

    public function store(Request $request)
    {
        $rules= [
            'namasantri' => 'required',
            'jeniskelamin' => 'required',
            'angkatan' => 'required'
        ];

        $this->validate($request, $rules,);

        $this->santri->nama_santri = $request->namasantri;
        $this->santri->jenis_kelamin = $request->jeniskelamin;
        $this->santri->angkatan = $request->angkatan;

        $this->santri->save();

        return redirect()->route('santri')->with('status', 'Data santri berhasil ditambahkan!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Santri $santri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = Buku::FindOrfail($id);
        return view ('datasantri.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSantriRequest $request, $id)
    {
        $update = Buku::FindOrFail($id);
        
        $update ->nama_santri = $request->namabuku;
        $update ->gender_santri = $request->genrebuku;
        $update ->angkatan_santri = $request->jumlahbuku;

        $update->save();
        return redirect()->route('santri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hapus = Santri::FindOrFail($id);
        $hapus->delete();
        return redirect()->route('santri');
    }
}
