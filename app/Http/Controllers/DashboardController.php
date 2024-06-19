<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
          // $data =  new santri;
          $query = dashboard::all();

        

          $totalSantri = DB::table('santris')->count();
          $jk_santri_counts = Santri::selectRaw('jk_santri, COUNT(*) as count')
            ->groupBy('jk_santri')
            ->pluck('count', 'jk_santri')
            ->all();
          return view ('dashboard.index',compact('request','query','totalSantri','jk_santri_counts'));
    }

    public function Chart()
    {
        
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
