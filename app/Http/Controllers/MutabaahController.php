<?php

namespace App\Http\Controllers;

use App\Models\mutabaah;
use App\Http\Requests\Storemutabaah;
use App\Http\Requests\Updatemutabaah;
use Illuminate\Http\Request;

class MutabaahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $data =  new mutabaah;
        $query = mutabaah::all();
        return view ('mutabaah.index',compact('request','query'));

    }
    public function detail(Request $request)
    {


        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        $query = mutabaah::all();
        return view('mutabaah.tambah',compact('query', 'request'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mutabaah = new mutabaah();
        $test = 1;

        $mutabaah->Fiqih = $request->Fiqih;
        $mutabaah->Hadis = $request->Hadis;
        $mutabaah->IT = $request->IT;
        $mutabaah->Quran = $request->Quran;
        $mutabaah->Bahasaarab = $request->Bahasaarab;
        $mutabaah->Bahasainggris = $request->Bahasainggris;
        $mutabaah->Polygon = $request->Polygon;
       
        $mutabaah->save();

        return redirect()->route('mutabaah')->with('add','Data Nilai Santri Berhasil ditambahkan!');
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mutabaah = mutabaah::findOrFail($id);
        

        return view('mutabaah.index',compact('mutabaah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mutabaah $mutabaah)
    {
        $edit = mutabaah::findOrFail($id);
        $query = mutabaah::all();
        return view ('mutabaah.edit',compact('edit'));
        ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mutabaah $mutabaah)
    {
        $mutabaah = mutabaah::findOrFail($id); 
        $mutabaah->Fiqih = $request->Fiqih;
        $mutabaah->Hadis = $request->Hadis;
        $mutabaah->IT = $request->IT;
        $mutabaah->Quran = $request->Quran;
        $mutabaah->Bahasaarab = $request->Bahasaarab;
        $mutabaah->Bahasainggris = $request->Bahasainggris;
        $mutabaah->Polygon = $request->Polygon;

        $santri->save();
        return redirect()->route('mutabaah')->with('success','Data Nilai Santri Berhasil diupdate!');
    }
       
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mutabaah $mutabaah)
    {
        //
    }
}
