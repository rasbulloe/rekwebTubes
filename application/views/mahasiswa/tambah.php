
    <div class="container">
        <div class="row">
            <div class="col-6">
            <div class="card">
              <div class="card-header">
                Tambah Data Mahasiswa
              </div>
              <div class="card-body">
              <form method="post" action="<?= base_url('mahasiswa/tambah'); ?>">
                <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="nama" name="nama">
                  
                  
                  <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                      <?= form_error('nama'); ?>
                    </div>
                  <?php endif; ?>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="nrp" class="col-sm-2 col-form-label col-form-label-sm">NRP</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="nrp" name="nrp">
                  <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                      <?= form_error('nrp'); ?>
                    </div>
                  <?php endif; ?>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="email" name="email">
                  <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                      <?= form_error('email'); ?>
                    </div>
                  <?php endif; ?>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="jurusan" class="col-sm-2 col-form-label col-form-label-sm">Jurusan</label>
                  <div class="col-sm-10">
                  <select class="form-control form-control-sm" id="jurusan" name="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Pangan">Teknik Pangan</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Planologi">Teknik Planologi</option>
                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                  </select>
                  </div>
                  </div>

                <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
              </form>
  </div>
</div>



            </div>
        </div>
    </div>

