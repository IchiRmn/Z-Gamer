<section class="blog p-t-50" style="background-image: url(<?=base_url()?>assets/images/back2.jpg);">
	<div class="container-fluid">
		<div class="row">
			<div style="margin-right: 580px; margin-left: 580px;">
				<?= $this->session->flashdata('alert'); ?>
			</div>
			<div class="col-5">
				<div style="margin-left: 250px;" >
					<a href="<?= base_url('Talent/Solo')?>" class="dis-block hov-img-zoom " style="max-width: 800px; max-height: 800px;">
						<img src="<?= base_url('assets/images/Tournament/sor.png')?>" class="" style="max-width: 800px; max-height: 800px;  ">
					</a>
				</div>
			</div>
			<div class="col-7" >
				<div style="margin-left: 50px; margin-top: 10px;" >
					<a href="<?= base_url('Talent/Squad')?>" class="dis-block hov-img-zoom ">
						<img src="<?= base_url('assets/images/Tournament/qur.png')?>" style="max-width:700px; max-height: 700px;" >
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


