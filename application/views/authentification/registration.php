<!-- daftar modal --> 
<div class="container">
<div class="modal fade" tabindex="-1" id="registrationModal" role="dialog"> 
	<div class="modal-dialog modal-dialog-centered" role="document"> 
		<div class="modal-content" style="background-color: #808080;"> 
			<div class="modal-header" style="background-color: #C11B17;"> 
				<h5 class="text-white text-center">Registration</h5> 
				<button type="button" class="close" style="color: white;" data-dismiss="modal" aria-label="Close"> 
					<span aria-hidden="true">&times;</span> 
				</button> 
			</div>
			<form action="<?= base_url('Auth/regist'); ?>" method="post"> 
				<div class="modal-body">
					<div class="form-group p-t-10">
						<label class="text-white col-form-label" for="formGroupExampleInput">Username</label> 
						<input type="text" class="form-control form-control-user rounded w-50" id="name" name="name" placeholder="PlatinumAxe" value="<?= set_value('name'); ?>">
                                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?> 
					</div>
					<div class="form-group p-t-10">
						<label class="text-white col-form-label" for="formGroupExampleInput">Email</label> 
						<input type="text" class="form-control form-control-user rounded" id="email" name="email" placeholder="PlatinumAxe@gmail.com" value="<?= set_value('email'); ?>">
                                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?> 
					</div> 
					<div class="form-group p-t-10"> 
						<div class="row">
    						<div class="col">
    							<label class="text-white col-form-label" for="formGroupExampleInput">Password</label>
      							<input type="password" class="form-control rounded" placeholder="*****" id="password1" name="password1"> value="<?= set_value('password1'); ?>">
                                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
    						</div>
    						<div class="col">
    							<label class="text-white col-form-label" for="formGroupExampleInput">Repeat Password</label>
      							<input type="password" class="form-control rounded" placeholder="*****" id="password2" name="password2" value="<?= set_value('password2'); ?>">
                                  <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
    						</div>
  						</div>
					</div>  
				</div> 
				<div class="modal-footer"> 
					<button type="button" class="btn btn-dark" data-dismiss="modal">Close</button> 
					<button type="submit" class="btn btn-danger">Save</button> 
					<a href="#" class=" btn btn-danger btn-block active" role="button" aria-pressed="true" data-toggle="modal" data-target="#registration1Modal">Regitration!</a>
				</div> 
			</form> 
		</div> 
	</div> 
</div> 
</div>
<!--/end of Modal Daftar -->