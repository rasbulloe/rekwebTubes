
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Daftar Mahasiswa</h3>
    <a href="<?= base_url('mahasiswa/tambah'); ?>" class="btn btn-dark mb-3">Tambah Data Mahasiswa</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NRP</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $i = 1; ?>
      <?php foreach( $mahasiswa as $mhs ) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $mhs['nama']; ?></td>
      <td><?= $mhs['nrp']; ?></td>
      <td><?= $mhs['email']; ?></td>
      <td><?= $mhs['jurusan']; ?></td>
      <td>
          <a href="" class="badge badge-dark">Ubah</a>
          <a href="" class="badge badge-danger">Hapus</a>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
            </div>
        </div>
    </div>