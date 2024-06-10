@extends('template.main')
@section('konten')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit</h4>
          <p class="card-description">Data Santri</p>
          <form method="post" action="{{route('updatesantri',$edit['id'])}}">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="Masukan Nama Santri">Nama Santri</label>
              <input type="text" class="form-control" value="{{$edit['nama_santri']}}" name="namasantri" />
            </div>
        
            <button type="submit" class="btn btn-primary mr-2"> Submit </button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
@endsection