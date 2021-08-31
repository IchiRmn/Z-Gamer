	<form method="post" action="<?php echo base_url();?>Shop/AddToCart" method="post" accept-charset="utf-8">
	<input type="hidden" name="id" value="<?php echo $m['id_merch']; ?>" />
	<input type="hidden" name="name" value="<?php echo $m['name_merch']; ?>" />
	<input type="hidden" name="price" value="<?php echo $m['price_merch']; ?>" />
	<input type="hidden" name="image_me" value="<?php echo $m['image_merch']; ?>" />
	</form> 