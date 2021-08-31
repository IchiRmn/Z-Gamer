
 <!-- Slide1 -->
	<section class="slide1" >
		

		<div class="wrap-slick1">


			<div class="slick1">
				<?php foreach ($game as $g) { ?>
				<div class="item-slick1 item1-slick1" style="background-image: url(<?=base_url()?>assets/images/game/<?= $g['image'];?>); background-size: 100%; height: 700px;">
					
					<div class="wrap-content-slide1 sizefull hero-wrap">

						<div class="overlay" style="background-color: black;"></div>
						<div style="margin-right: 580px; margin-left: 580px;">
							<?= $this->session->flashdata('alert'); ?>
						</div>	

						<img class="position-relative p-l-50 p-t-50" width="320" height="120" src="<?= base_url('assets/images/icons/whats.png');?>" alt="IMG-PAYPAL">
						<h2 class="caption2-slide1 l-text1 animated visible-false p-l-50 p-r-50" style="padding-top: 450px; font-size: 30px; " data-appear="fadeInUp"><?= $g['judul']; ?>
						</h2>
					
					</div>
				</div>
				<?php }?>
				
			</div>

		</div>
	</section>