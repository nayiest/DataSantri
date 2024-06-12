{{-- @extends('template.main')
@section('konten')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit</h4>
          <p class="card-description">Data Prestasi</p>
          <form method="post" action="{{route('updateprestasi',$edit['id'])}}">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="Masukan Nama Santri">Nama Santri</label>
              <input type="text" value="{{$edit['nama_santri']}}" class="form-control" value="{{$edit['nama_santri']}}" name="namasantri" />
            </div>
            <div class="form-group">
              <label for="Masukan Kategori Prestasi">Kategori Prestasi</label>
              <input type="text" value="{{$edit['kategori_prestasi']}}" class="form-control" value="{{$edit['kategori_prestasi']}}" name="kategoriprestasi" />
            </div>
            <div class="form-group">
              <label for="Masukan Keterangan Prestasi">Keterangan Prestasi</label>
              <input type="text" value="{{$edit['keterangan_prestasi']}}" class="form-control" value="{{$edit['keterangan_prestasi']}}" name="keteranganprestasi" />
            </div>
            <button type="submit" class="btn btn-primary mr-2"> Edit </button>

          </form>
        </div>
      </div>
    </div>
@endsection --}}