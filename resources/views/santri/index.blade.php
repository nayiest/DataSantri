@extends('template.santri')
@section('santri')
    
<div class=" text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h3 class="mb-0">Data Santri</h3>
        <center>
            <div class="card-body">             
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Card</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Table</a>
                    </li>
                </ul>
            </div>
        </center>
        <a class="btn btn-md btn-primary " style="margin-bottom:20px" href="{{route('tambahsantri')}}"><i class="fas fa-plus-circle"></i> Add New Data</a>  
    </div>
</div>


        
   

<div class="row">
    <div class="col-md-12">
        
            
            
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <br>


                        {{-- Table Card Data --}}

                        <div class="page-content"> 
                            <section class="row">
                                
                                
                                @foreach ($query as $item)
                                <div class="col-12 col-lg-4" >
                                    <div class="row">
                                        <div class="column">
        
                                            <div class="card">
                                                <div class="card-body py-4 px-4">
                                                    <div class="d-flex align-items-center">
                                                            
                                                        <div class="avatar avatar-xl">
                                                            <img src="storage/images/{{ $item->photo_santri }}">
                                                        </div>
                                                        <div class="ms-3 name">
                                                            <h5 class="font-bold">{{$item->nama_santri}}</h5>
                                                            <h6 class="text-muted mb-0">{{$item->angkatan_santri}}</h6>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    
                                                    <center>
                                                        <a href="{{route('detailsantri',$item->id)}}" class="btn icon btn-primary " > Detail</a>
                                                        <a href="{{ route('editsantri',$item->id) }}" class="btn icon btn-warning"> Edit</a>
                                                        <a class="btn icon btn-danger" href="{{route('hapussantri',$item->id)}}" onclick="return confirm('Mau Dihapus?!')"> Delete </a>
                                                    </center>
                                                        
                                                    
                                                </div>
                                            </div>
        
                                        
                                        </div>
                                 </div>
        
                                </div>
                                    @endforeach
                                    
                            </section>
                        </div>



                        
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
                        


                        <div class="card">
                            <div class="card-body py-4 px-4">
                        <table class="table text-start align-right table-bordered table-hover mb-0 ">

                            <h5 class="card-title">Table Data Santri</h5><br>
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Santri</th>
                                    <th scope="col">Angkatan</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Ttl</th>
                                    <th scope="col">Action</th>
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
                                    <td>{{$item->angkatan_santri}}</td>
                                    <td>{{$item->jk_santri}}</td>
                                    <td>{{$item->tgllahir_santri}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning rounded-pill m-2" href="{{route('editsantri',$item->id)}}"><i class="fa fa-solid fa-pen"></i></a>
                                        <a class="btn btn-light rounded-pill m-2" href="{{route('hapussantri',$item->id)}}" onclick="return confirm('Mau Dihapus?!')"><i class="fa fa-solid fa-trash"></i></a>
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
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><br>

@endsection