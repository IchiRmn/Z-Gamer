<section class="banner" style="background-image: url(<?=base_url()?>assets/images/back2.jpg);">
<div class="container " >
	<div class="row p-t-40 p-b-40">
		<div class="col-md-auto">
				<div class="block4 wrap-pic-w" style="height: 270px; width: 400px; max-width: 400px;max-height: 270px">
				<img src="<?= base_url('assets/images/Game/') . $image;?>" style="max-width: 400px;max-height: 270px" >
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
			<p> Source: <?= $source;?></p>
		</div>
		<div class="col m-l-20">
			<div class="row">
				<div class="col">
					<div class="row">
						<p class="m-text5 text-white"><?= $judul;?></p>
					</div>
					<div class="row">
						<p style="font-style: italic;"> Post By <?= $editor?> on <?= $date_g?>
					</div>
				</div>
			</div>
			<div class="row">
				<p class="h6 text-white m-t-40" style="text-indent: 5%; text-align: justify; font-size: 20px;"><?= $isi;?></p>
			</div>
		</div>
	</div>
</div>
</section>