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
              <input type="text" value="{{$edit['nama_santri']}}" class="form-control" value="{{$edit['nama_santri']}}" name="namasantri" />
            </div>
            <div class="form-group">
              <label for="Masukan Gender Santri">gender Santri</label>
              <input type="text" value="{{$edit['gender_santri']}}" class="form-control" value="{{$edit['gender_santri']}}" name="gendersantri" />
            </div>
            <div class="form-group">
              <label for="Masukan Angkatan Santri">Angkatan Santri</label>
              <input type="text" value="{{$edit['angkatan_santri']}}" class="form-control" value="{{$edit['angkatan_santri']}}" name="angkatansantri" />
            </div>
            <button type="submit" class="btn btn-primary mr-2"> Edit </button>

          </form>
        </div>
      </div>
    </div>
@endsection