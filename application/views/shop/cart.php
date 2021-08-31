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
		<div class="pos-relative">
			<div class="bgblack p-t-30 p-b-40 bo5">
				<table class="m-l-40">
					<tr class="table-head">
						<th class="column-1 p-l-35 p-r-35 p-b-20"></th>
						<th class="column-2 text-white p-l-35 p-r-35 p-b-20">Product</th>
						<th class="column-3 text-white p-l-70 p-r-35 p-b-20">Price</th>
						<th class="column-4 text-white text-center p-l-10 p-r-35 p-b-20">Quantity</th>
						<th class="column-5 text-white p-l-35 p-r-10 p-b-20 text-center">Total</th>
					</tr>
					<?php foreach ($cart->result_array() as $items) { ?>
					<input type="hidden" name="idcart" value="<?= $items['id_cart'];?>">
					<tr class="table-row bo6">
						<td class="column-1 p-l-35 p-r-35">
							<a href="<?= base_url('Shop/deleteCart/'.$items['merch_id'])?>">
								<div class="cart-img-product b-rad-4 o-f-hidden " style="width: 150px; height: 150px;">
									<img src="<?= base_url('assets/images/Shop/'.$items['merch_image'])?>" alt="IMG-PRODUCT"  style="width: 150px; height: 150px;">
								</div>
							</a>
						</td>
						<td class="column-2 text-white m-l-35 m-r-70"><?= $items['merch_name'];?></td>
						<td class="column-3 text-white p-l-70 p-r-70">$ <?= $items['merch_price'];?></td>
						<td class="column-4 p-l-50 p-r-70 text-center">
							<div class="row">
								<div class="col">
									<a href="<?= base_url('Shop/MinusCart/'.$items['merch_id'])?>" class="sizefull bg1 hov1 text-white s-text1 p-t-2 p-b-2 p-l-20 p-r-20">
										-1
									</a>
									</button>
								</div>
								<div class="col text-white">
									<b><?= $items['merch_qty'];?></b>
								</div>
								<div class="col">
									<a href="<?= base_url('Shop/AddToCart/'.$items['merch_id'])?>" class="sizefull  beta text-white s-text1 p-t-2 p-b-2 p-l-20 p-r-20">
										+1
									</a>
									</button>
								</div>
							</div>
						</td>
						<td class="column-5 text-white p-l-35 p-r-20 text-center">$<?= $items['merch_total'];?>.00</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>

		<!-- Total -->
		<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm bgblack">
			<h5 class="m-text20 p-b-24 text-white">
				Cart Totals
			</h5>
			<?php 
				$total = 0;
					foreach ($cart->result() as $cart) {
					$sub_total= $total += $cart->merch_total;
			}?>
			<!--  -->
			<div class="flex-w flex-sb-m p-b-12">
				<span class="s-text18 w-size19 w-full-sm text-white">
					Subtotal:
				</span>

				<span class="m-text21 w-size20 w-full-sm">
					<?php $query = $this->db->get('cart'); ?>
					<?php if ($query->num_rows()>0) { ?>
						
						$ <?= $sub_total ?>.00
					
					<?php } else { ?>
					
						<p class="p-r-33" style="font-style: italic;">You dont have any transaction<p>
					
					<?php } ?> 
				</span>
			</div>
			<form method="post" action="<?= base_url('Shop/Checkout')?>">
				<input type="hidden" name="sub_total" id="sub_total" value="<?= $sub_total; ?>">
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm text-white">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if you need any help.
						</p>

						<span class="s-text19 text-white">
							Calculate Shipping
						</span>
						
						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-3 bgwhite">
							<select class="selection-2 m-l-11" name="country" id="country">
								<option >Select a country..</option>
								<?php foreach ($ship as $ship) { ?>
								<option value="<?= $ship->id_ship; ?>"><?= $ship->direction; ?></option>
								<?php } ?>
							</select>
						</div>
						<span><?= form_error('state', '<small class="text-danger pl-3">', '</small>'); ?></span>
						<div class="size13 bo4 m-b-3">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" id="state"placeholder="State/City">
						</div>
						<span class="p-t-5 p-b-5"><?= form_error('state', '<small class="text-danger pl-3">', '</small>'); ?></span>
						<div class="size13 bo4 m-b-3">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" id="postcode" placeholder="Postcode / Zip">
						</div>
						<span class=""><?= form_error('postcode', '<small class="text-danger pl-3">', '</small>'); ?></span>
					</div>
				</div>
				<!--  -->
				<div class="flex-w flex-sb-m p-t-10 p-b-5">
				
				</div>
				<div class="size15 trans-0-4">
					<!-- Button -->
					<button type="button"  data-toggle="modal" data-target="#exampleModalLong" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
				</div>
			
		</div>
	</div>
</section>

<!-- Modal -->
<div class="modal fade m-t-200" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: ;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Are you sure to do this transaction?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        This transaction will be processed and cannot be changed again. Make sure your address and order are correct
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Go!</button>
      </div>
    </div>
  </div>
</div>
</form>