<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/img/home/coba1.jpeg'); ?>" class="d-block w-100" height="575px" weight="1260px" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/home/slide2.jpg'); ?>" class="d-block w-100" height="575px" weight="1260px" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/home/slide3.jfif'); ?>" class="d-block w-100" height="575px" weight="1260px" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<br>
<h1 class="text-center font-weight-bold">Pilihan SALEabration untukmu</h1>

<div class="container-fluid">
    <div class="row">

        <?php foreach ($barang as $brg) : ?>

            <div class="card mt-4 ml-3 mr-3" style="width: 15rem;">
                <img src="<?= base_url() . '/assets/img/home/' . $brg->gambar; ?>" class=" card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $brg->nama_brg; ?></h5>
                    <small><?= $brg->keterangan_short; ?></small><br>
                    <span class="badge badge-pill badge-success">Rp. <?= $brg->harga; ?></span><br>
                    <?= anchor('home/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-success mt-3">Tambah ke Keranjang</div>'); ?>
                    <a href="<?= base_url(); ?>home/detail/<?= $brg->id_brg; ?>" class="btn btn-primary">Detail</a>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</div>