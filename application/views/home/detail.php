<section class="detail-product">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 mt-5">
                <img src="<?= base_url(); ?>/assets/img/home/<?= $barang['gambar'];?>">
            </div>

            <div class="col-md-7 mt-5">
                <p class="new-product">New</p>
                <h3><?= $barang['nama_brg'];?></h3>
                <p>Product Code : abc123</p>
                <p class="price">Rp. <?= $barang['harga'];?></p>
                <p><b>Availability :</b> In stock</p>
                <p><b>Condition :</b> New</p>
                <p><b>Brand : </b> AstroBoy</p>
                <label>Quantity:</label>
                <input type="text" value="1">
                <button type="button" class="btn btn-warning">Add to cart</button>
            </div>
        </div>
    </div>

</section>

<section class="product-desc">
    <div class="container">
        <h6>Product Description</h6>
        <p><?= $barang['keterangan_long'];?></p>
    </div>

</section>