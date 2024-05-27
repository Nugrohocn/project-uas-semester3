    <section class="konten">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                        </div>

                        <div class="panel-body">
                            <?php echo $this->session->flashdata('pesan') ?>
                            <form method="post" action="<?php echo base_url('C_auth/login') ?>" class="user">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input 
                                        type="text" class="form-control form-control-user"
                                        placeholder="Masukan Username" name="username">
                                        <?php echo form_error('username','<div class="text-danger small ml-2">','</div>'); ?>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input 
                                        type="password" class="form-control form-control-user"
                                        placeholder="Password" name="password">
                                        <?php echo form_error('password','<div class="text-danger small ml-2">','</div>'); ?>
                                </div>
                                
                                <center>
                                    <button class="btn btn-primary" type="submit">Login</button>
                                </center><br>
                            </form>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('C_registrasi/index') ?>">Belum Punya akun? Daftar!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br>