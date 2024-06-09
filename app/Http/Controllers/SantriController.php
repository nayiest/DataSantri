<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Http\Requests\StoresantriRequest;
use App\Http\Requests\UpdatesantriRequest;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $data =  new santri;
        $query = Santri::all();
        return view ('santri.index',compact('request','query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $query = Santri::all();
        return view('santri.tambah',compact('query'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $rules = [
        //     'nama_santri' => 'required',
        //     'angkatan' => 'required'
        // ];
        // $message = [
        //     'required' => 'data yang di input tidak sesuai'
        // ];

        // $this->validate($request, $rules, $message);

        $santri = new santri();

        $filePath = public_path('storage/images');
        $santri->nama_santri = $request->nama_santri;
        $santri->jk_santri = $request->jk_santri;
        $santri->angkatan_santri = $request->angkatan_santri;
        $santri->tgllahir_santri = $request->tgllahir_santri;
        $santri->domisili_santri = $request->domisili_santri;
        $santri->alamat_santri = $request->alamat_santri;
        $santri->photo_santri = $request->photo_santri;
       
        
        // SAVE IMAGE
        
        if ($request->hasFile('photo_santri')){
            $image = $request->file('photo_santri');
            $text = $image->getClientOriginalExtension();
            $image_name = time() .".". $text;
            $image->move('storage/images',$image_name);

            $santri->photo_santri = $image_name;
        }


        

        $santri->save();

        return redirect()->route('santri')->with('add','Data Santri Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $santri = Santri::findOrFail($id);

        return view('santri.detail',compact('santri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $edit = Santri::findOrFail($id);
        $query = Santri::all();
        return view ('santri.edit',compact('edit'));
        return view ('santri.edit',compact('query'));
=======
        $edit = Buku::FindOrfail($id);
        return view ('datasantri.edit', compact('edit'));
>>>>>>> 220f9f8dcf9f200ca434f570baf9a9fb0baed74d
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, $id)
    {
        $santri = santri::findOrFail($id);
        $santri->nama_santri = $request->nama_santri;
        $santri->jk_santri = $request->jk_santri;
        $santri->angkatan_santri = $request->angkatan_santri;
        $santri->tgllahir_santri = $request->tgllahir_santri;
        $santri->domisili_santri = $request->domisili_santri;
        $santri->alamat_santri = $request->alamat_santri;
        $santri->photo_santri = $request->photo_santri;
       
        
        // SAVE IMAGE
        
        if ($request->hasFile('photo_santri')){
            $image = $request->file('photo_santri');
            $text = $image->getClientOriginalExtension();
            $image_name = time() .".". $text;
            $image->move('storage/images',$image_name);

            $santri->photo_santri = $image_name;
        }
        
        $santri->save();
        return redirect()->route('santri')->with('success','Data Buku Berhasil diupdate');
=======
    public function update(UpdateSantriRequest $request, $id)
    {
        $update = Buku::FindOrFail($id);
        
        $update ->nama_santri = $request->namabuku;
        $update ->gender_santri = $request->genrebuku;
        $update ->angkatan_santri = $request->jumlahbuku;

        $update->save();
        return redirect()->route('santri');
>>>>>>> 220f9f8dcf9f200ca434f570baf9a9fb0baed74d
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        $hapus = santri::findOrFail($id);
        $hapus->delete();
        return redirect()->route('santri')->with('destroy','Data Buku Berhasil dihapus');
=======
        $hapus = Santri::FindOrFail($id);
        $hapus->delete();
        return redirect()->route('santri');
>>>>>>> 220f9f8dcf9f200ca434f570baf9a9fb0baed74d
    }
}
