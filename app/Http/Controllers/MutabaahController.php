<?php

namespace App\Http\Controllers;

use App\Models\mutabaah;
use App\Http\Requests\Storemutabaah;
use App\Http\Requests\updatemutabaah;
use Illuminate\Http\Request;

class MutabaahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
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
        return view('mutabaah.tambah',compact('query'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(request $request, $id)
    {
       
    }
       
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       
    }
}   

