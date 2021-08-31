<!-- Footer -->
<footer class="p-t-60 p-b-43 p-l-45 p-r-45" style="background-color: black;">
<hr color="#CFCFCF" style="padding-bottom: 0.5px;">
	<div>
  		
  	</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="<?= base_url('assets/images/icons/paypal.png');?>" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="<?= base_url('assets/images/icons/visa.png');?>" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="<?= base_url('assets/images/icons/mastercard.png');?>" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="<?= base_url('assets/images/icons/express.png');?>" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="<?= base_url('assets/images/icons/discover.png');?>" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2021 This website is made by <a target="_blank">Alfin Adzuhri</a> Crew
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/vendor/animsition/js/animsition.min.js');?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/vendor/bootstrap/js/popper.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/vendor/select2/select2.min.js');?>"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/vendor/slick/slick.min.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/slick-custom.js');?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/vendor/countdowntime/countdowntime.js');?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/vendor/lightbox2/js/lightbox.min.js');?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/vendor/sweetalert/sweetalert.min.js');?>"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="<?= base_url('assets/js/main.js');?>"></script>
	<script>
    $('.custom-file-input').on('change', function() { 
    	let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-control').addClass("selected").html(fileName);
    });
    $('.alert-message').alert().delay(3500).slideUp('slow');
</script>

</body>
</html>