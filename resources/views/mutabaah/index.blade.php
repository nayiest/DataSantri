@extends('template.main')
@section('konten')
<div class=" text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h3 class="mb-0">Nilai Santri</h3>
        <a class="btn btn-md btn-primary " style="margin-bottom:20px" href="{{route('tambahnilai')}}"><i class="fas fa-plus-circle"></i> Add New Data</a>  
    </div>
</div>             
        <div class="card">
            <div class="card-body py-4 px-4">
                <table class="table number align-right table-bordered table-hover mb-0 "> 
                    <h5 class="card-title">Table Data Nilai Santri</h5><br>
                        <thead>
                            <tr class="text-white">
                                <th scope="col">No</th>
                                <th scope="col">Nama Santri</th>
                                <th scope="col">Sholat Jamaah</th>
                                <th scope="col"></th>
                                <th scope="col">Hadis</th>
                                <th scope="col">Quran</th>
                                <th scope="col">Bahasa Arab</th>
                                <th scope="col">Bahasa Inggris</th>
                                <th scope="col">Polygon</th>
                                <th style="center" scope="col">Action </th>
                            </tr>
                        </thead>
                </table>
            </div>
        </div>
@endsection