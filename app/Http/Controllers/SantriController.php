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
        $query = Santri::all();



        // $data =  new santri;
        return view ('santri.index',compact('request','query'));
    }


 
    // public function dashboard(Request $request)
    // {
    //     $santri =  new santri;
    //     $query = Santri::all();
    //     $santri->jk_santri = $request->count('jk_santri');


    //     // $santri = Santri::table('santri')->count();
    //     return view ('dashboard.index',compact('request','query','santri'));
    // }

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
        $rules = [
            // 'nama_santri' => 'required',
            // 'jk_santri' => 'required',
            // 'angkatan_santri' => 'required',
             // 'tgllahir_santri' => 'required'
        ];
        $message = [
            'required' => 'data yang di input tidak sesuai'
        ];

        $this->validate($request, $rules, $message);

        $santri = new santri();
        $test = 1;

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
        session()->flash('add', 'Data berhasil ditambahkan!');
        
        return redirect()->route('santri');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $santri = Santri::findOrFail($id);
        

        return view('santri.detail',compact('santri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = Santri::findOrFail($id);
        $query = Santri::all();
        return view ('santri.edit',compact('edit'));
        return view ('santri.edit',compact('query'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $filePath = public_path('storage/images');
        $santri = Santri::findOrFail($id); 
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
        session()->flash('update', 'Data berhasil diupdate!');
        return redirect()->route('santri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hapus = santri::findOrFail($id);
        $hapus->delete();
        
        session()->flash('destroy', 'Data Santri berhasil dihapus!');
        return redirect()->route('santri');

    }
}
