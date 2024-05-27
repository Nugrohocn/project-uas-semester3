        <section class="konten">
            <div class="container">
                <?php 
                    if($keranjang = $this->cart->contents()){
                ?>
                <center><h2>Checkout</h2></center>
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
                
                <form method="post" action="<?php echo base_url()?>C_dashboard/proses_pesanan">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                            <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>BCA - XXXXXXXXXX</option>
                                    <option>BNI - XXXXXXXXXX</option>
                                    <option>BRI - XXXXXXXXXX</option>
                                    <option>Cash On Delivery (COD)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Alamat Lengkap   :</label>
                        <textarea class="form-control" name="alamat" placeholder="Masukan alamat anda secara lengkap" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Checkout</button>

                </form>

                <?php
                    }else{
                        echo "<div class='alert alert-danger' role='alert'><center><h4>Keranjang Masih Kosong!</h4></center></div><br><br><br><br><br><br><br><br><br><br><br><br>";
                    }
                ?>

            </div>
        </section>
        <br><br><br>