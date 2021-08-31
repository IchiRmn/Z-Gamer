<style type="text/css">
	.zcart {
		color: white !important;
	}
	.zcart:hover{
		color: #48D1CC !important;
	}
</style>
<style type="text/css">
	.zcart1 {
		
	}
	.zcart1:hover{
		color: white !important;
	}
</style>
<section class="p-t-55 p-b-65" style="background-image: url(<?=base_url()?>assets/images/back2.jpg);">
	<div class="container">
		<div class="row">
			<div class="col col-sm-6 col-md-4 col-lg-3 ">
				<div class="leftbar p-r-20 p-r-0-sm bo9"  style="background-color: black;">
					<div class="row">
						<div class="col m-l-30 m-t-20">
							<h4 class="m-text14 p-b-7 text-white">
								Categories
							</h4>

							<ul class="p-b-54">
								<li class="p-t-4 ">
									<a href="<?= base_url('Shop')?>" class="s-text13 active1 zcart1">
										All
									</a>
								</li>
								<?php foreach ($ctg as $ctg) { ?>
								<li class="p-t-4">
									<a href="<?= base_url('Shop/Category/'.$ctg->id_mcategory)?>" class="s-text13 zcart1">
									<?= $ctg->mcategory;?>	
									</a>
								</li>
								<?php }?>
							</ul>			
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!-- Product -->
				<div class="row">
					<?php foreach ($merch as $m) {?>
						
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="bo5 wrap-pic-w of-hidden pos-relative" style="width: 240px; height: 290px; background-image: url(<?=base_url()?>assets/images/back8.jpg); background-size: 100%;">
									<img src="<?= base_url('assets/images/Shop/'.$m->image_merch)?>" class="pos-relative m-t-50" style="width: 100%; size: 100%;">

									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button onclick="window.location.href='<?= base_url('Shop/AddToCart/'.$m->id_merch)?>'" type="submit" class="flex-c-m size1 bg1 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>
								<div class="col bo8  block2 p-t-10 p-b-5" style="width: 240px; background-color: black;">
									<div class="row">
										<div class="col">
											<div class="row" style="background-color: #2F4F4F;">
												<div class="col">
													<div class="text-center">
														<a href="<?= base_url('Shop/detailMerchan/'.$m->id_merch);?>" class="block2-name dis-block s-text3 p-b-5 zcart">
														<?= $m->name_merch;?>
														</a>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-auto text-right">
													<div class="m-t-8">
														<span class=" m-text6 p-r-5 text-white">
															$<?= $m->price_merch;?>
														</span>
													</div>
												</div>
												<div class="col">
													<div class="w-size9 m-t-6 m-l-60">
														<a href="<?= base_url('Shop/detailMerchan/'.$m->id_merch);?>" class=" bg1 rounded hov1 s-text16 text-white" style="padding: 5px">
					                        				details
					                    				</a>
													</div>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>	
					<?php } ?>
				</div>
			
			</div>
		</div>
	</div>
</section>