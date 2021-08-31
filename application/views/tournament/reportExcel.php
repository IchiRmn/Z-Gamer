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