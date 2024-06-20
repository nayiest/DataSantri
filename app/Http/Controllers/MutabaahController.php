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
        return view ('mutabaah.tambah',compact('request','query'));

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
        // $mutabaah = new mutabaah();
        // $test = 1;

        // $santri->nama_santri = $request->nama_santri;
        // $santri->jk_santri = $request->jk_santri;
        // $santri->angkatan_santri = $request->angkatan_santri;
        // $santri->tgllahir_santri = $request->tgllahir_santri;
        // $santri->domisili_santri = $request->domisili_santri;
        // $santri->alamat_santri = $request->alamat_santri;
        // $santri->photo_santri = $request->photo_santri;
       
       
    }

    /**
     * Display the specified resource.
     */
    public function show(mutabaah $mutabaah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mutabaah $mutabaah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mutabaah $mutabaah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mutabaah $mutabaah)
    {
        //
    }
}
