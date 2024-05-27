<body>
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Pasar Online Surakarta</h2>
                <p>ppppp pppppp pppppp ppppp pppppp pppppp ppppp pppppp pppppp ppppp <br> pppppp pppppp
                    ppppp pppppp ppppppppppp pppppp ppppppppppp pppppp <br> ppppppppppp pppppp pppppp
                </p>
            </div>
        </div>
    </div>
</section>

<section class="konten">
    <div class="container">

    <div class="row">
            <div class="col-md-3">
               <h2>Kategori</h2>
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">

                            <li><a href="<?php echo base_url('welcome') ?>">Produk Terbaru</a></li>
                            <li><a href="<?php echo base_url('C_kategori/sayur') ?>">Sayur</a></li>
                            <li><a href="<?php echo base_url('C_kategori/buah') ?>">Buah</a></li>
                            <li><a href="<?php echo base_url('C_kategori/daging') ?>">Daging</a></li>

                        </ul>
                    </div>
                </nav> 

            </div>

            <div class="col-md-9">
                
                <h2>Produk Terbaru</h2>

                <div class="row">

                <?php foreach ($daging as $brg) : ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="" class="img-responsive">
                            <div class="caption">
                                <h3><?php echo $brg->nama_brg ?></h3>
                                <h5>Rp. <?php echo number_format($brg->harga) ?> /kg</h5>

                                <?php echo anchor('C_dashboard/tambah_keranjang/' .$brg->id_brg, '<div class="btn btn-primary">Beli</div>') ?>
                                <?php echo anchor('C_dashboard/detail/' .$brg->id_brg, '<div class="btn btn-default">Detail</div>') ?>
                            </div>
                        </div>
                    </div>
                    
                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

    </div>
</section>
</body>