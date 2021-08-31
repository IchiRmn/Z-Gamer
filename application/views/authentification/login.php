<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-end p-l-400 p-t-60 p-b-30">
        <div class="col-6 col-md-4 p-t-50 text-center">
        <?= $this->session->flashdata('alert'); ?> 
        </div>

        <div class="col-lg-4">

            <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: #363636">
               
                <div class="row card-header " style="background-color:#C11B17 ">
                    <div class="col-sm-2">   
                        <a class="header-wrapicon1 dis-block " href="<?= base_url('Home')?>"> <img src="<?= base_url('assets/images/icons/home.png');?>" class="rounded-circle" alt="ICON"></a> 
                    </div>
                    <div class="col-sm-8">
                        <div class="text-white text-center " style="font-size: 17.5px">Have an account? Log in!</div>
                    </div>
                </div>
                <div class="card-body">

                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-0">
                               
                                <form class="user" method="post" action="<?= base_url('Auth'); ?>">
                                    <div class="form-group">
                                         <label class="text-white col-form-label" for="formGroupExampleInput">Email</label>
                                        <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Gmail@gmail.com" name="email">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group p-b-20">
                                        <label class="text-white col-form-label" for="formGroupExampleInput">Password</label>
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="********" name="password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            

                                        </div>
                                        <div class="col">
                                            <div class="text-right p-r-15">
                                            <button type="submit" class=" text-white btn btn-danger btn-lg active rounded w-65">Go!
                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                                </div>
                            
                            </div>


                        </div>

                    </div>
                    <hr color="#555555" class="p-60">
                    <h1 class="h6 text-white text-center">Don't have account yet?</h1>
                                <div >
                                <div class=" p-l-50 p-r-50 p-t-20 p-b-30">
                                    <a href="<?= base_url('Auth/Regist')?>" class=" btn btn-danger btn-block active" role="button">Create Account</a>
                                </div>
                </div>
            </div>

        </div>

    </div>
</div>
</div>
</div>