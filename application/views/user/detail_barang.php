<div class="container-fluid">

    <div class="card"><br><br><br><br><br>
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">

            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() . '/assets/img/home/' . $brg->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?php echo $brg->nama_brg ?></strong></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $brg->keterangan_short ?></strong></td>
                            </tr>

                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $brg->kategori ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $brg->stok ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga, 0, ',', '.')  ?> </div>
                                    </strong></td>
                            </tr>
                        </table>

                        <?php echo anchor('user/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-success mt-3">Tambah ke Keranjang</div>') ?>

                        <?php echo anchor('user', '<div class="btn btn-danger mt-3">Kembali</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>