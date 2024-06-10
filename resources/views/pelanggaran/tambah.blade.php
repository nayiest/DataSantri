<form method="post" action="{{route('pelanggaran.store')}}" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content bg-secondary">
              <div class="modal-header">
                  <h4 class="modal-title">Tambah Data pelanggaran</h4>
                  <button type="button" class="close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="container-fluid px-4">
                      <div class="row g-4">
                          <div class="col-sm-12 col-xl-12">
                              <div class="bg-secondary rounded h-100 p-4">
                                  <div class="mb-3">
                                      <label class="form-label">Nama Santri</label>
                                      <input type="text" name="namasantri" placeholder="Masukkan nama pelanggaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Nama pelanggaran</label>
                                    <input type="text" name="namapelanggaran" placeholder="Masukkan nama pelanggaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                  <button type="submit" name="submit" class="btn btn-light">Tambah</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</form>