<!DOCTYPE html>
<html lang="en">

    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>POSKA</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
	</head>
    
    <header>
			<div class="container">
				
				<nav class="navbar navbar-default" style="background-color: #F5F5F5;">
					<div class="container-fluid">
					
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php echo base_url().'welcome'?>"><img src="<?php echo base_url()."assets/"; ?>gambar/poska.png"></a>
						</div>
				  
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<form action="pencarian.php" method="get" class="navbar-form navbar-right">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Cari" name="keyword">
								</div>
								<button class="btn btn-default">Cari</button>
							</form>
							
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php echo base_url('welcome') ?>">Home</a></li>
								<li>
                                    <?php
                                        $keranjang = 'Keranjang('.$this->cart->total_items(). ')'
                                    ?>
                                    <?php echo anchor('C_dashboard/detail_keranjang', $keranjang) ?>
                                </li>

								<?php if($this->session->userdata('username')){ ?>
                                    <li class="ml-2"><?php echo anchor('C_auth/logout','Logout') ?></li>
                                <?php }else{ ?>
                                    <li><?php echo anchor('C_auth/login', 'Login'); ?></li>    
                                <?php } ?>    

							</ul>
						</div>
					</div>
				</nav>

			</div>
	</header>