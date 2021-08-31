<style type="text/css">
	.ztitle {
		color: white !important;
	}
	.ztitle:hover{
		color: gray !important;
		text-decoration: underline;
	}
</style>
<section class="banner p-t-70 p-b-50" style="background-image: url(<?=base_url()?>assets/images/back2.jpg">
	<div class="container">

		<!--Line-->
		<?php foreach ($game as $game) {?>
		<hr class="m-b-20" color="white">
		<div class="row p-b-20	 ">
			<div class="col-4 m-t-20">
			<div class="block4 wrap-pic-w" style="height: 270px; width: 360px; max-width: 360px;max-height: 270px">
				<img src="<?= base_url('assets/images/Game/') . $game->image;?>" style="height: 270px; width: 360px; max-width: 360px;max-height: 270px" >
					<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
						<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
							<p class="m-text2 text-center text-white m-b-15 h-size1 of-hidden">
								<b>Created By Z-GAMER</b>
							</p>
							<span class="s-text9">
							Photo by Pinterest
							</span>
						</div>
					</a>
			</div>
			<div class="row p-t-15">
				<div class="col"><p class="h6 text-white">Post By <?= $game->editor?></p>
				</div>
				<div class="col text-right"><p class="s-text4 text-white"> <?= $game->date_created;?></p>
				</div>
			</div>
			</div>
			<div class="col-8 m-t-20">
				
				<div class="row">
				<a href="<?= base_url('Game/detailNews/' . $game->id)?>" class="ztitle m-text5 m-l-10"><span><?= $game->judul;?></span></a>
				</div>

				<div class="row">
				<p class="h5 m-l-10 m-t-20 text-white" style="text-indent: 5%;"><?= word_limiter($game->isi, 80)?> <a href="<?= base_url('Game/detailNews/'.$game->id);?>" style="color: #1E90FF;">Read more</a></p> 
				
				</div>

			</div>

		</div>
		<!--Line-->
		
		<?php }?>
		<hr class="m-b-20" color="white">
	</div>
</section>
