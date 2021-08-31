<style type="text/css">
	.ztitle {
		color: white !important;
	}
	.ztitle:hover{
		color: gray !important;
		text-decoration: underline;
	}
</style>
<section class="blog bgwhite p-t-94 p-b-65" style="background-image: url(<?=base_url()?>assets/images/back2.jpg);">
	<div class="container">
		<div class="row">
			<?php foreach ($tour as $tour) { ?>
				<div class="col p-b-50" style="padding-left: 50px;">
					<div class="block3-overlay rounded" style=" height: 270px; width: 450px; background-image: url(<?=base_url()?>assets/images/back8.jpg); background-size: 100%;">
						<div class="row">
							<div class="col">
								<div style="padding-top: 30px; padding-left: 30px">
									<a href="<?= base_url('Tournament/details/'.$tour->id_tour);?>" class="block3-img dis-block hov-img-zoom" style="height: 180px; width: 180px;" >
										<img src="<?= base_url('assets/images/Tournament/') . $tour->image_tour;?>" style ="height: 180px; width: 180px;" >
									</a>
								</div>
							</div>
							<div class="col">
								<div class="p-t-50 p-r-30">
									<a href="<?= base_url('Tournament/details/'.$tour->id_tour);?>" class="ztitle m-text4" style="font-size: 20px;">
										<span style="text-align: center;"><?= $tour->name_tour;?></span>
									</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<hr color="white" class="p-b-0 m-b-10"> 
							</div>
						</div>
						<div class="row">
							<div class="col text-right">
								<div class="m-r-20">
									<a href="<?= base_url('Tournament/details/'.$tour->id_tour);?>"> 
										<span style="color: #6D6D6D">Details</span> 
										<img src="<?= base_url('assets/images/icons/toogle.png')?>" style="width: 10px; height: 15px;">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</section>
			