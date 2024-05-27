        <section class="konten">
            <div class="container">
                <h1>Keranjang Belanja</h1>
                <hr>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no=1; foreach ($this->cart->contents() as $items) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $items['name'] ?></td>
                                <td><?php echo $items['qty'] ?></td>
                                <td>Rp.<?php echo number_format($items['price']) ?></td>
                                <td>Rp.<?php echo number_format($items['subtotal']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="4"><strong><center>TOTAL</center></strong></td>
                            <td>Rp.<?php echo number_format($this->cart->total()) ?></td>
                        </tr>

                    </tbody>
                </table>

                <a href="<?php echo base_url('welcome') ?>">
                    <div class="btn btn-default">Lanjut Belanja</div>
                </a>
                <a href="<?php echo base_url('C_dashboard/hapus_keranjang') ?>">
                    <div class="btn btn-danger">Hapus Keranjang</div>
                </a>
                <a href="<?php echo base_url('C_dashboard/pembayaran') ?>">
                    <div class="btn btn-primary">Checkout</div>
                </a>
            </div>
        </section>
        <br><br><br><br><br><br><br><br><br><br>