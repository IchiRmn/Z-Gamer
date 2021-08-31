<?php 
header("Content-type: application/vnd-ms-excel"); 
header("Content-Disposition: attachment; filename=$title.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 
?> 

<h3><center>Report Of Z-Gamer News</center></h3>
</br>

<table class="table-data"> 
	<thead> 
		<tr> 
			<th>No</th> 
				<th class="text-center">ID News</th>
                <th class="text-center">Title</th>
                <th class="text-center">Editor</th>
                <th class="text-center">Source</th>
                <th class="text-center">Date Created</th>  
		</tr> 
	</thead> 
	<tbody> 
		<?php $no = 1; foreach($game as $game){ ?> 
			<tr> 
				<th scope="row"><?= $no++; ?></th> 
				<td><p class="text-center"><?= $game['id'] ?></p></td>
                <td><p class=""><?= $game['judul']; ?></p></td>
                <td><p class=""><?= $game['editor']; ?></p></td>
                <td><p class=""><?= $game['source']; ?></p></td>
                <td><p class=""><?= $game['date_created']; ?></p></td>
			</tr> 
		<?php } ?> 
	</tbody> 
</table>