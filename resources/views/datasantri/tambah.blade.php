@extends('template.main')
@section('konten')
     <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Tambah Data Santri</h6>
                            <form method="post" action="{{route('storetambahbuku')}}">
                            @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Santri</label>
                                    <input type="text" name="namasantri" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('namasantri')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                                    <input type="text" name="jeniskelamin" class="form-control" id="exampleInputPassword1">
                                @error('jeniskelamin')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                                </div>
                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Angkatan</label>
                                    <input type="number" name="angkatan" class="form-control" id="exampleInputPassword1">
                                @error('angkatan')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>        
@endsection