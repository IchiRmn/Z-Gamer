<!DOCTYPE html>
<html>
<head>
	<title>|Z| Report </title>
</head>
<body>
	
	<style type="text/css">
		.table-data{
			width: 100%;
			border-collapse: collapse;}
		.table-data tr th,
		.table-data tr td{
			border: 1px solid black;
			font-size: 11pt;
			padding: 10px 10px 10px 10px;
		}
	</style>
	
	<h3><center>Report Of Z-Gamer Merchandise</center></h3>
	</br>

		<table class="table-data"> 
		<thead> 
			<tr> 
				<th>No</th> 
				<th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Price</th>
                <th class="text-center">Category</th>
                <th class="text-center">Stock</th>
                <th class="text-center">Store</th>
                <th class="text-center">Date Created</th>
			</tr> 
		</thead> 
		<tbody> 
			<?php $no = 1; foreach($merch as $merch){ ?> 
				<tr> 
					<th scope="row"><?= $no++; ?></th> 
					<td><p class="text-center"><?= $merch['id_merch'] ?></p></td>
                    <td><p class=""><?= $merch['name_merch']; ?></p></td>
                    <td><p class="">$<?= $merch['price_merch']; ?></p></td>
                    <td><p class=""><?= $merch['category_merch']; ?></p></td>
                    <td><p class=""><?= $merch['stock_merch']; ?> pcs</p></td>
                    <td><p class=""><?= $merch['store_merch']; ?></p></td>
                    <td><p class=""><?= $merch['date_merch']; ?></p></td>
				</tr> 
			<?php } ?> 
		</tbody> 
	</table>

	<script type="text/javascript"> window.print(); </script>

</body>
</html>