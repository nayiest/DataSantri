<div class="container-scroller">
@extends('template.main')
@section('konten')


<div class="main-panel">

    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Form Tambah Santri</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"></a> Home </li>
            <li class="breadcrumb-item active" aria-current="page"> Add Students Form </li>
          </ol>
        </nav>
      </div>
      <div class="row">
        
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              
              <form class="forms-sample" method="post" action="{{route('storetambah')}}">
                @csrf
                <div class="form-group">
                  <p for="exampleInputUsername1">Nama Lengkap</p>
                  <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" id="exampleInputUsername1" placeholder="Username" >
                  @error('nama')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                </div>
                <div class="form-group">
                    <p for="exampleInputUsername1">Jenis Kelamin</p>
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="" /> Ikhwan </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked /> Akhwat </label>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Mustawa</label>
                      <div class="col-sm-9">
                        <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                
                <br>
                
                <div class="form-group">
                    <label>Upload Photo</label>
                    <input type="file" name="img[]" class="file-upload-default" />
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                      </span>
                    </div>
                  </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                </div>
                <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                
              </form>
            </div>
            
          </div>
        </div>
        
        
      </div>
    </div>

</div>
  
  
@endsection