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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSantriRequest $request)
    {
        //
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
        $edit = Santri::FindOrFail($id);
        return view ('datasantri.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update = Santri::FindOrFail($id);
        
        $update ->nama_santri = $request->namasantri;
        $update ->gender_santri = $request->gendersantri;
        $update ->angkatan_santri = $request->angkatansantri;
        $update ->ttl_santri = $request->ttlsantri;

        $update->save();
        return redirect()->route('buku');
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
