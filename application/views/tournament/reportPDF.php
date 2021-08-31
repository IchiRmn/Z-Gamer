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
	
	<h3><center>Report Of Z-Gamer Tour</center></h3>
	</br>

		<table class="table-data"> 
		<thead> 
			<tr> 
				<th>No</th> 
				<th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Game</th>
                <th class="text-center">Category</th>
                <th class="text-center">Organizer</th>
                <th class="text-center">Date Begin</th>
                <th class="text-center">Date Created</th>
			</tr> 
		</thead> 
		<tbody> 
			<?php $no = 1; foreach($tour as $t){ ?> 
				<tr> 
					<th scope="row"><?= $no++; ?></th> 
					<td><p class="text-center"><?= $t['id_tour'] ?></p></td>
                    <td><p class=""><?= $t['name_tour']; ?></p></td>
                    <td><p class=""><?= $t['game_tour']; ?></p></td>
                    <td><p class=""><?= $t['category']; ?></p></td>
                    <td><p class=""><?= $t['organizer']; ?></p></td>
                    <td><p class=""><?= $t['date_tour']; ?></p></td>
                    <td><p class=""><?= $t['date_']; ?></p></td>
				</tr> 
			<?php } ?> 
		</tbody> 
	</table>
</body>
</html>