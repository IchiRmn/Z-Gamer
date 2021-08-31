<style type="text/css">
	.zcart {
		color: white !important;
	}
	.zcart:hover{
		color: #48D1CC !important;
	}
</style>
<section style="background-image: url(<?= base_url()?>assets/images/back2.jpg);">
	<div class="container p-t-35 p-b-80 bgblack bo2">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-80 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="bg-secondary">
						<div class="item-slick3">
							<div class="wrap-pic-w">
								<img src="<?= base_url('assets/images/Shop/'.$image_m)?>" alt="IMG-PRODUCT">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13 text-white">
					<?= $name_m;?>
				</h4>

				<span class="m-text17 text-white">
					$<?= $price_m;?>
				</span>

				<p class="s-text8 p-t-10">
					Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<a href="<?= base_url('Shop/AddToCart/' . $id_me)?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<span class="s-text8 m-r-35">Stock: <?= $stock_m?></span>
					<span class="s-text8">Categories: <?= $category_m?></span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4 text-white">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?= $desc_m;?>
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4 text-white">
						FYI
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?= $fyi_m;?>
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4 text-white">
						Term and Conditions
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?= $tac_m?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="relateproduct bgblack p-t-45 p-b-138 bo6">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center text-white">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
				<?php foreach ($mrc as $mrc) { ?>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative bo11" style="width: 200px; height: 225px; background-image: url(<?=base_url()?>assets/images/back8.jpg); background-size: 100%;">
								<img src="<?= base_url('assets/images/Shop/'.$mrc->image_merch)?>" alt="IMG-PRODUCT" class="m-t-15">

								<div class="block2-overlay trans-0-4">
									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button onclick="window.location.href='<?= base_url('Shop/AddToCart/'.$mrc->id_merch)?>'" type="submit" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="<?= base_url('Shop/detailMerchan/'.$mrc->id_merch);?>" class="block2-name dis-block s-text3 p-b-5 text-white zcart">
									<?= $mrc->name_merch;?>
								</a>
								<span class="block2-price m-text6 p-r-5 text-white">
									$<?= $mrc->price_merch;?>
								</span>
							</div>
						</div>
					</div>
			<?php }?>
				</div>
			</div>
		</div>
	</section>
</section>

