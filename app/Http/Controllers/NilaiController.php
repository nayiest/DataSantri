<?php

namespace App\Http\Controllers;

use App\Models\nilai;
use App\Http\Requests\Storenilai;
use App\Http\Requests\updatenilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
                // $data =  new nilai;
                $query = nilai::all();
                return view ('nilai.index',compact('request','query'));
    }
    public function detail(Request $request)
    {

        
    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create(Request $request)
    {
        $query = nilai::all();
        return view('nilai.tambah',compact('query'));

       
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nilai = new nilai();
        $test = 1;

        $nilai->namasantri = $request->namasantri;
        $nilai->Fiqih = $request->Fiqih;
        $nilai->Hadis = $request->Hadis;
        $nilai->IT = $request->IT;
        $nilai->Quran = $request->Quran;
        $nilai->BahasaArab = $request->BahasaArab;
        $nilai->BahasaInggris = $request->BahasaInggris;
        $nilai->Polygon = $request->Polygon;
       
        $nilai->save();

        return redirect()->route('nilai')->with('add','Data Nilai Santri Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $nilai = nilai::findOrFail($id);
        

        return view('mutabaah.nilai',compact('nilai'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = nilai::findOrFail($id);
        $query = nilai::all();
        return view ('nilai.edit',compact('edit'));
        ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $nilai = nilai::findOrFail($id);

        $nilai->namasantri = $request->namasantri;
        $nilai->Fiqih = $request->Fiqih;
        $nilai->Hadis = $request->Hadis;
        $nilai->IT = $request->IT;
        $nilai->Quran = $request->Quran;
        $nilai->Bahasaarab = $request->BahasaArab;
        $nilai->Bahasainggris = $request->BahasaInggris;
        $nilai->Polygon = $request->Polygon;

        $nilai->save();
        return redirect()->route('nilai')->with('success','Data Nilai Santri Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hapus =nilai ::findOrFail($id);
        $hapus->delete();
        return redirect()->route('nilai')->with('destroy','Data Nilai Santri Berhasil dihapus!');
    }
}
