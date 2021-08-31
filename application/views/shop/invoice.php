<style type="text/css">
	.beta {
		background-color: #33CC00 !important;
	}
	.beta:hover{
		background-color: #006600 !important;
	}
</style>
<section class="cart p-t-70 p-b-100" style="background-image: url(<?=base_url()?>assets/images/back2.jpg);">
	<div class="container">
			<div class="bgblack p-t-30 p-b-30 bo5 p-l-150 p-r-150">
				<h5 class="m-text20 p-b-12 p-t-12 text-center text-white bo-rad-23" style="background-color: #C11B17;">
                    Check Out
                </h5>
                <div class="row">
	                <h5 class="text-white">
						Profile
					</h5>
                </div>
				<div class="row">
					<table class="p-l-40 text-white m-text20" style="font-size: 15px;">
						<tr>
							<td>
								<div>
									<span> Name : <?= $name_inv; ?></span>
									<span style="margin-left: 450px;"> Email : <?= $email_inv; ?></span>
								</div>
								<div>
									<span> Country : <?= $dirc; ?></span>
									<span style="margin-left: 476px;"> City : <?= $city_inv; ?></span>
								</div>
								<div>
									<span> Postcode : <?= $post_; ?></span>
								</div>
							</td>
						</tr>
					</table>
				</div>
				<div class="row bo10">
					<?php foreach ($inv as $items) { ?>
						<div class="col-auto ">
							<div class="row">
								<div class="col-auto">
									<img src="<?= base_url('assets/images/Shop/'.$items->image_merch);?>" alt="IMG-PRODUCT"  style="width: 150px; height: 150px;">
								</div>
								<div class="col-6 text-right p-t-20 text-white">
									<div>
										<?= $items->name_merch;?>
									</div>
									<div>
										<span>$ <?= $items->price_merch;?></span>
										<span style="font-style: italic;" class="p-l-50">qty : <?= $items->merch_qty;?></span>
									</div>	
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<?php
					$total1 = 0;
					foreach ($cart->result() as $cart) {
					$sub_total= $total1 += $cart->merch_total;
				}?>
				<div class="row ">
					<div class="col p-t-20">
						 <a href="<?= base_url('Shop')?>" role="button" class="text-white btn btn-dark btn-md active rounded">
                               Back
                         </a>
					</div>
					<div class="col text-right text-white">
						<td>
							<div>
								<span> Ship Rate : $ <?= $ship_r; ?>.00 </span>
							</div>
							<div>
								<span> Total : $ <?= $tot_merch; ?>.00 </span>
							</div>
						</td>
					</div>
				</div>
			</div>
		</div>
	</section>

		