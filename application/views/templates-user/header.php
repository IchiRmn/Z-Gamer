<!DOCTYPE html>
<html lang="en">
<head>
	<title>|Z| <?= $tittle; ?></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('assets/images/icons/Z.png');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/themify/themify-icons.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/elegant-font/html-css/style.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animsition/css/animsition.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/daterangepicker/daterangepicker.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/slick/slick.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/lightbox2/css/lightbox.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	<header class="header1">
	
		<div class="container-menu-header">
			<div class="topbar" style="background-color: #C11B17">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img src="<?= base_url('assets/images/icons/Zlogo.png');?>" class="header-icon1" alt="ICON">
				</a>
				<!-- Header Icon -->

				<div class="topbar-child2">	

					<?php if ($this->session->userdata('email')){?>
						<div class="header-wrapicon2">
							<img src="<?= base_url('assets/images/icons/Purchase.png');?>" class="header-icon1 js-show-header-dropdown" alt="ICON">
							
							<span class="header-icons-noti">
								<?php
									$query = $this->ModelMerchan->getDataWhere('cart',['user_email' => $this->session->userdata('email')]);
									if ($query->num_rows()>0) {
										echo $mmqty->mqty;
									}
									else {
										echo "0";
									}
								?>
									
							</span>							
							<!-- Header cart noti -->			
							<div class="header-cart header-dropdown bo11" style="background-color: black;">
								<ul class="header-cart-wrapitem">			
									<?php foreach ($cart->result() as $items) { ?>
										<li class="header-cart-item ">
											<div class="header-cart-item-img">
												<img src="<?= base_url('assets/images/Shop/'.$items->merch_image)?>" alt="IMG">
											</div>
											<div class="header-cart-item-txt">
												<span class="header-cart-item-name text-white">
													<?= $items->merch_name?>
												</span>
												<table>
													<tr>
														<td>
														<span class="header-cart-item-info text-white">
															$ <?= $items->merch_price?>
														</span>
														</td>
														<td>
														<span class="m-l-80 header-cart-item-info" style="font-style: italic;">
															<b>quantity : <?= $items->merch_qty?></b>
														</span>
														</td>
													</tr>
													
												</table>
											</div>
										</li>
									<?php } ?>
								</ul>
								<?php
									$total1 = 0;
									foreach ($cart->result() as $cart) {
									$sub_total= $total1 += $cart->merch_total;
								}?>
									<div class="header-cart-total text-white">	 	
									
									<?php $query = $this->ModelMerchan->getCart(); ?>
										<?php if ($query->num_rows()>0) { ?>
											
											$<?= $sub_total;?> .00
										
										<?php } else { ?>
										
											<p class="p-r-33" style="font-style: italic;">You dont have any transaction<p>
										
									<?php } ?> 
									
									</div>
									
								<div class="header-cart-buttons">
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="<?= base_url('Shop/detailCart')?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											View Cart
										</a>
									</div>
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="<?= base_url('Shop')?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Shopping
										</a>
									</div>
								</div>
							</div>
						</div>

					<?php } else {?>

						<a href="<?= base_url('Shop');?>" class="header-wrapicon1 dis-block">
							<img src="<?= base_url('assets/images/icons/Purchase.png');?>" class="header-icon1 js-show-header-dropdown" alt="ICON">
						</a>
					
					<?php } ?>

					<span class="linedivide1"></span>
					
					<?php 
					if ($this->session->userdata('email')){?>
						<div class="header-wrapicon2">						
							<span class="mr-3 d-none d-lg-inline text-white"><?= $name; ?></span>
							<img src="<?= base_url('assets/images/Profile/') . $img; ?>" class="header-icon1 rounded-circle js-show-header-dropdown" alt="ICON">
							<div class="header-cart header-dropdown rounded" style="background-color:#363636;width: 200px">
								<div class="header-cart-buttons">
									<div class="header-cart-wrapbtn">
										<div class="">
											<a href="<?= base_url('Auth/Logout')?>" class="btn btn-block active" role="button" style="background-color: #C11B17; font-size: 11px;">
												<span class="text-white">Logout</span>
											</a>										
										</div>
									</div> 		
									<div class="header-cart-wrapbtn">
										<div class="">
											<a href="<?= base_url('Profile')?>" class="btn btn-block active" role="button" style="background-color: #C11B17; font-size: 11px;">
												<span class="text-white">Profile</span>
											</a>											
										</div>
									</div>
								</div>
							</div>
						</div>

					<?php }else{ ?>
						<a href="<?= base_url('Auth')?>" class="header-wrapicon1 dis-block">
						<div class="mr-3 d-none d-lg-inline text-white">Login</div>
						<img src="<?= base_url('assets/images/Profile/default.jpg');?>" class="header-icon1 rounded-circle" alt="ICON">
						</a>
					<?php } ?>

				</div>
			</div>
			<div class="wrap_header" style="background-color: black;">
			<!-- Menu -->
			<div class="wrap_menu">
				<nav class="menu">
					<ul class="main_menu">
						<li>
							<a href="<?= base_url('Home')?>">Home</a>
						</li>

						<li>
							<a href="<?= base_url('Game')?>">Game</a>
						</li>

						<li>
							<a href="<?= base_url('Tournament')?>">Tournamet</a>
						</li>

						<li>
							<a href="<?= base_url('Talent')?>">Z-Talent</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>