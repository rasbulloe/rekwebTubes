
    <div class="container">
        <div class="row">
            <div class="col-6">
            <div class="card">
              <div class="card-header">
                Ubah Data Mahasiswa
              </div>
              <div class="card-body">
              <form method="post">
              <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                  
                  
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
                  <input type="text" class="form-control form-control-sm" id="nrp" name="nrp" value="<?= $mahasiswa['nrp']; ?>">
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
                  <input type="text" class="form-control form-control-sm" id="email" name="email" value="<?= $mahasiswa['email']; ?>">
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
                  <?php foreach( $jurusan as $j ) : ?> 
                  <?php if ($j == $mahasiswa['jurusan']) : ?> 
                  <option value="<?= $j; ?>"selected><?= $j; ?></option>
                  <?php else : ?>
                  <option value="<?= $j; ?>"><?= $j; ?></option>
                  <?php endif; ?>
                  <?php endforeach; ?>
                  </select>
                  </div>
                  </div>

                <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
              </form>
  </div>
</div>



            </div>
        </div>
    </div>

