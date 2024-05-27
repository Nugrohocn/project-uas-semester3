<section class="konten">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login Pelanggan</h3>
                    </div>

                    <form method="post" action="<?php echo base_url('C_registrasi/index') ?>" class="user">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                placeholder="Nama Anda" name="nama">
                                <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>') ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                placeholder="Username Anda" name="username">
                                <?php echo form_error('username','<div class="text-danger small ml-2">','</div>') ?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user"
                                    placeholder="Password" name="password_1">
                                    <?php echo form_error('password_1','<div class="text-danger small ml-2">','</div>') ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                    placeholder="Ulangi Password" name="password_2">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?php echo base_url('C_auth/login') ?>">Sudah Punya Akun? Silahkan Login!</a>
                    </div><br>
                </div>
            </div>    
        </div>
    </div>
</section><br><br><br>