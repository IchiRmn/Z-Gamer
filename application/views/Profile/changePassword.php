<section class="cart p-t-70 p-b-50" style="background-image: url(<?=base_url()?>assets/images/back2.jpg); background-size: 100%;">
     <div class="container">
    <!--  -->
    <div class="justify-content-center p-l-250 p-r-250 p-t-40">
        <div class="bo9 p-l-40 p-r-40 p-t-30 p-b-38 " style="background-color: black;">
            <h5 class="m-text20 p-b-12 p-t-12 text-center text-white bo-rad-23" style="background-color: #C11B17;">
                    Change Password
            </h5>
            <div class="text-center">
                <?= $this->session->flashdata('alert'); ?>
            </div>
                <div class="p-t-50 p-b-50">
                    <img class="rounded" src="<?= base_url('assets/images/Profile/'). $img;?>" style="width: 35%; margin-left: 32%;">
                </div>
                <!--  -->
                <form action="<?= base_url('Profile/changePassword'); ?>" method="post">
                             
                                    <div class="form-group">
                                        <label class="text-white col-form-label" for="password_sekarang">Currently Password</label>
                                        <input type="password" class="form-control form-control-user rounded w-75"id="password_sekarang" placeholder="*******" name="password_sekarang">
                                        <?= form_error('password_sekarang', '<small class="text-danger pl-3">', '</small>'); ?>      
                                    </div> 
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="text-white col-form-label" for="password_baru1">New Password</label>
                                                <input type="password" class="form-control form-control-user rounded"  id="password_baru1" placeholder="*******" name="password_baru1">
                                                <?= form_error('password_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>       
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="text-white col-form-label" for="password_baru2">Repeat Password</label>
                                                <input type="password" class="form-control form-control-user rounded"  id="password_baru2" placeholder="*******" name="password_baru2">
                                                <?= form_error('password_baru2', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>       
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="text-right">
                                                <a href="<?= base_url('Profile')?>" role="button" class="text-white btn btn-dark btn-md active rounded">
                                                        Cancel
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="text-right">
                                                <button type="submit" class="text-white btn btn-danger btn-md active rounded">
                                                        Change
                                                </button>
                                            </div>
                                        </div>
                                    </div>            
                    </form>
                <!--  -->
            </div>
        </div>
        </div>
    </section>