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

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script>
  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>
</body> 

</html>
