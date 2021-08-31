<?php 
header("Content-type: application/vnd-ms-excel"); 
header("Content-Disposition: attachment; filename=$title.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 
?> 

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