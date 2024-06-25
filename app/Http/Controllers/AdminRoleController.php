<?php

namespace App\Http\Controllers;
use App\Models\adminrole;
use App\Http\Requests\StoreadminroleRequest;
use App\Http\Requests\UpdateadminroleRequest;
use Illuminate\Http\Request;
use App\Imports\SantriImport;
use Maatwebsite\Excel\Facades\Excel;



class AdminRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexadminv(Request $request)
    {


        // $data =  new santri;
        $query = adminrole::all();
        return view ('santriadminv.index',compact('request','query'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        // Excel::import(new SantriImport, $request->file('file'));

        return redirect()->route('santriadminv.index')->with('success', 'Data Santri berhasil diimpor.');
    }
 
    // public function dashboard(Request $request)
    // {
    //     $santri =  new santri;
    //     $query = Santri::all();
    //     $santri->jk_santri = $request->count('jk_santri');


    //     // $santri = Santri::table('santriadminv')->count();
    //     return view ('dashboard.index',compact('request','query','santriadminv'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function createadminv()
    {
        $query = adminrole::all();
        return view('santriadminv.tambah',compact('query'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeadminv(Request $request)
    {
        // $rules = [
        //     'nama_santri' => 'required',
        //     'angkatan' => 'required'
        // ];
        // $message = [
        //     'required' => 'data yang di input tidak sesuai'
        // ];

        // $this->validate($request, $rules, $message);

        $santri = new adminrole();
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
        
        return redirect()->route('santriadminv');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $santri = adminrole::findOrFail($id);
        

        return view('santriadminv.detail',compact('santriadminv'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editadminv($id)
    {
        $edit = adminrole::findOrFail($id);
        $query = adminrole::all();
        return view ('santriadminv.edit',compact('edit'));
        return view ('santriadminv.edit',compact('query'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateadminv(Request $request, $id)
    {
        // $filePath = public_path('storage/images');
        $santri = adminrole::findOrFail($id); 
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
        return redirect()->route('santriadminv');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyadminv($id)
    {
        $hapus = adminrole::findOrFail($id);
        $hapus->delete();
        
        session()->flash('destroy', 'Data Santri berhasil dihapus!');
        return redirect()->route('santriadminv');

    }
}
