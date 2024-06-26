@extends('template.main')
@section('konten')
<div class=" text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h3 class="mb-0">Pelanggaran Santri</h3>
        <a class="btn btn-md btn-primary " style="align-right" href="{{route('tambahpelanggaran')}}"><i class="fas fa-plus-circle"></i> Add New Data</a>  
    </div>
</div>
@if (Session::has('add'))
    <div class="alert alert-success" role="alert"><center>
        {{ Session::get('add') }}</center>
    </div>
@endif
@if (Session::has('success'))
    <div class="alert alert-success" role="alert"><center>
        {{ Session::get('success') }}</center>
    </div>
@endif
@if (Session::has('destroy'))
    <div class="alert alert-success" role="alert"><center>
        {{ Session::get('destroy') }}</center>
    </div>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
                <div class="card">
                    <div class="card-body py-4 px-4">
                        <table class="table text-start align-right table-bordered table-hover mb-0 ">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Santri</th>
                                    <th scope="col">Pelanggaran</th>
                                    <th scope="col">Kategori Pelanggaran</th>
                                    <th scope="col">Deskripsi Pelanggaran</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                ?>  
                                @foreach ($query as $item)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$item->nama_santri}}</td>
                                    <td>{{$item->nama_pelanggaran}}</td>
                                    <td>{{$item->kategori_pelanggaran}}</td>
                                    <td>{{$item->deskripsi_pelanggaran}}</td>
                                 
                                    <td class="text-center">
                                        <a class="btn btn-warning rounded-pill m-2" href="{{route('editpelanggaran',$item->id)}}"><i class="fa fa-solid fa-pen"></i></a>
                                        <a class="btn btn-light rounded-pill m-2" href="{{route('hapuspelanggaran',$item->id)}}" onclick="return confirm('Mau Dihapus?!')"><i class="fa fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                                    $no++;
                                    ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection













            
        
      
    
</body>
</html>
