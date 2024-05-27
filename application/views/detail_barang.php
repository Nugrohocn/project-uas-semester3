        <section class="konten">
            <div class="container">
                <?php foreach($barang as $brg) : ?>
                    <div class="row">
                        <div class="col-md-6">
                            <br>
                            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="img-responsive" alt="">
                        </div>

                        <div class="col-md-6">
                            <h1><font color="#4EBC0B"><?php echo $brg->nama_brg ?></font></h1>
                            <h4>
                                <div class="btn btn-md btn-success">
                                    Rp.<?php echo number_format($brg->harga) ?> /kg.
                                 </div>
                            </h4><br>
                            <h4><?php echo $brg->keterangan ?></h4><br>
                            <h5>Stok : <?php echo $brg->stok ?> Kg</h5><br>

                            <?php echo anchor('C_dashboard/tambah_keranjang/' .$brg->id_brg, '<div class="btn btn-primary">Tambah Ke Keranjang</div>') ?>
                            <?php echo anchor('welcome', '<div class="btn btn-default">Kembali</div>') ?>
                        </div>
                    </div>
                <?php endforeach; ?>    
            </div>
        </section><br><br><br>