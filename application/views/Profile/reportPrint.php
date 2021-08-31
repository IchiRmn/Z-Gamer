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
	
	<h3><center>Report Of Z-Gamer User</center></h3>
	</br>

		<table class="table-data"> 
		<thead> 
			<tr> 
				<th>No</th> 
				<th>ID User</th> 
				<th>Username</th> 
				<th>Email</th>
				<th>Role</th> 
				<th>Date Join</th>  
			</tr> 
		</thead> 
		<tbody> 
			<?php $no = 1; foreach($user as $user){ ?> 
				<tr> 
					<th scope="row"><?= $no++; ?></th> 
					<td><p class="text-center"><?= $user['id'] ?></p></td>
                    <td><p class=""><?= $user['name']; ?></p></td>
                    <td><p class=""><?= $user['email']; ?></p></td>
                    <td><p class="text-center"><?= $user['role']; ?></p></td>
                    <td><p class="text-center"><?= $user['date_created']; ?></p></td>
				</tr> 
			<?php } ?> 
		</tbody> 
	</table>

	<script type="text/javascript"> window.print(); </script>

</body>
</html>