<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
</div>


<section id="aa-slider" class="home">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="<?= base_url(); ?>/assets/img/home/slide1.jpg" alt="Men slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 75% Off</span>
                            <h2 data-seq>Sofa Collection</h2>
                            <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                            <a data-seq href="#belanja" class="aa-shop-now-btn aa-secondary-btn page-scroll">SHOP NOW</a>
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="<?= base_url(); ?>/assets/img/home/slide2.jpg" alt="Wristwatch slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 40% Off</span>
                            <h2 data-seq>Table Collection</h2>
                            <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                            <a data-seq href="#belanja" class="aa-shop-now-btn aa-secondary-btn page-scroll">SHOP NOW</a>
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="<?= base_url(); ?>/assets/img/home/slide3.jfif" alt="Women Jeans slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 75% Off</span>
                            <h2 data-seq>Library Collection</h2>
                            <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                            <a data-seq href="#belanja" class="aa-shop-now-btn aa-secondary-btn page-scroll">SHOP NOW</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
</section>



<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br>
<section class="belanja" id="belanja">
    <h1 class="text-center font-weight-bold">Pilihan SALEabration untukmu</h1>


    <div class="container">
        <div class="container-fluid">
            <div class="row">

                <?php foreach ($barang as $brg) : ?>

                    <div class="card mt-4 ml-3 mr-3" style="width: 15rem;">
                        <img src="<?= base_url() . '/assets/img/home/' . $brg->gambar; ?>" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $brg->nama_brg; ?></h5>
                            <small><?= $brg->keterangan_short; ?></small><br>
                            <span class="badge badge-pill badge-success">Rp. <?= $brg->harga; ?></span><br>

                            <?php echo anchor('user/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-success mt-3">Tambah ke Keranjang</div>') ?>
                            <?php echo anchor('user/detail/' . $brg->id_brg, '<div class="btn btn-success mt-3">Detail</div>') ?>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>

    </div>



    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
    </div>


    <section id="aa-slider" class="home">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="<?= base_url(); ?>/assets/img/home/slide1.jpg" alt="Men slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Sofa Collection</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#belanja" class="aa-shop-now-btn aa-secondary-btn page-scroll">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="<?= base_url(); ?>/assets/img/home/slide2.jpg" alt="Wristwatch slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 40% Off</span>
                                <h2 data-seq>Table Collection</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#belanja" class="aa-shop-now-btn aa-secondary-btn page-scroll">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="<?= base_url(); ?>/assets/img/home/slide3.jfif" alt="Women Jeans slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Library Collection</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#belanja" class="aa-shop-now-btn aa-secondary-btn page-scroll">SHOP NOW</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>



    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br>
    <section class="belanja" id="belanja">
        <h1 class="text-center font-weight-bold">Pilihan SALEabration untukmu</h1>


        <div class="container">
            <div class="container-fluid">
                <div class="row">

                    <?php foreach ($barang as $brg) : ?>

                        <div class="card mt-4 ml-3 mr-3" style="width: 15rem;">
                            <img src="<?= base_url() . '/assets/img/home/' . $brg->gambar; ?>" class=" card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $brg->nama_brg; ?></h5>
                                <small><?= $brg->keterangan_short; ?></small><br>
                                <span class="badge badge-pill badge-success">Rp. <?= $brg->harga; ?></span><br>

                                <?php echo anchor('user/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-success mt-3">Tambah ke Keranjang</div>') ?>
                                <?php echo anchor('user/detail/' . $brg->id_brg, '<div class="btn btn-success mt-3">Detail</div>') ?>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>

        </div>


    </section>