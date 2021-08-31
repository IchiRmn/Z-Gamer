<style type="text/css">
	.boton {
		background-color: #1E90FF !important;
	}
	.boton:hover{
		background-color:  #48D1CC !important;
		text-decoration: underline;
	}
</style>
<section class="cart p-t-70 p-b-50" style="background-image: url(<?=base_url()?>assets/images/back2.jpg); background-size: 100%;">
    <div class="container">
        <div class="row" style="margin-left: 5%;"> 
        	<?php foreach ($tour as $tour) { ?>
	        	<div class="col m-b-10">
	    			<div class="m-t-40" style="width: 400px;">
	            		<div class="bo9 p-l-20 p-r-20 p-t-30 p-b-30 " style="background-color: black;">
                    		<div class="row text-center">
			                    <div class="col">
			                        <h1 class="m-text5 text-white"><?= $tour->name_tour;?></h1>
			                        <hr color="white"> 
			                    </div>
			                </div>
			                <div class="row">
			                	<div class="col">
			                		<div>
			                			<img src="<?= base_url('assets/images/Tournament/'.$tour->image_tour)?>"class="img-fluid rounded" style="padding: 20px;">
			                		</div>
			                	</div>
			                </div>
                    		<div class="row">
			                    <div class="col-auto">
			                        <table>
			                            <tr>
			                                <th class="s-text5 text-white">Game</th>
			                                <td class="s-text5 text-white p-l-10 p-r-10">:</td>
			                                <td class="s-text5 text-white"><?= $tour->game_tour;?></td>
			                            </tr>
			                        </table>
			                    </div>
			                    <div class="col">
			                        <table>
			                            <tr>
			                                <th class="s-text5 text-white">Organizer</th>
			                                <td class="s-text5 text-white p-l-10 p-r-10">:</td>
			                                <td class="s-text5 text-white"><?= $tour->organizer;?></td>
			                            </tr>
			                        </table>
			                    </div>
			                </div>
			            	<div class="row m-t-20">
			                	<div class="col">
			                		<h1 class="h5 text-white"> Description </h1>
			                	</div>
			                </div>
			                <div class="row">
			                	<div class="col">
			                		<p style="text-align: justify;"><?= word_limiter($tour->description_tour, 15);?></p>
			                	</div>
			                </div>
					        <div class="row m-t-5">         
					            <div class="col text-right">
					                    <a href="<?= base_url('Tournament/details/'.$tour->id_tour);?>" class=" bg1 bo-rad-23 hov1 s-text16 text-white" style="padding: 5px">
					                        Check Details
					                    </a>
					            </div>
					        </div>
					        <hr color="gray">
					        <div class="row">
					            <div class="col text-center m-t-15">
				                    <a href="<?= base_url('Talent/SquadRegist/'.$tour->id_tour)?>" class="boton bo-rad-23  m-text20 trans-0-4 text-white" style="padding: 11px; padding-left: 80px; padding-right: 80px;">
				                        Join!
				                    </a>
					            </div>
					        </div>
					    </div>
					</div>
				</div>
			<?php } ?>	
		</div>
	</div>
</section>