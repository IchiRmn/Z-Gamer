<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-end p-l-400 p-t-60 p-b-30">
            
        <div class="col-lg-4">

            <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: #363636">
                <div class="row card-header " style="background-color:#C11B17 ">
                    <div class="col-sm-2">   
                        <a class="header-wrapicon1 dis-block " href="<?= base_url('Home')?>"> <img src="<?= base_url('assets/images/icons/home.png');?>" class="" alt="ICON"></a> 
                    </div>
                    <div class="col-sm-8">
                        <div class="text-white text-center h4">Registration!</div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-0">
                                
                                <form class="user" method="post" action="<?= base_url('Auth/Regist'); ?>">
                                    <div class="form-group">
                                         <label class="text-white col-form-label" for="formGroupExampleInput">Username</label>
                                        <input type="text" class="form-control form-control-user" value="<?= set_value('name'); ?>" id="name" placeholder="PlatinumAxe" name="name">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group p-b-20">
                                        <label class="text-white col-form-label" for="formGroupExampleInput">Email</label>
                                        <input type="text" class="form-control form-control-user" id="text" placeholder="Email@gmail.com" name="email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="row">
                                    <div class="col">   
                                    <div class="form-group p-b-20">
                                        <label class="text-white col-form-label" for="formGroupExampleInput">Password</label>
                                        <input type="password" class="form-control form-control-user" id="password1" placeholder="******" name="password1">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group p-b-20">
                                        <label class="text-white col-form-label" for="formGroupExampleInput">Repeat Password</label>
                                        <input type="password" class="form-control form-control-user" id="password2" placeholder="******" name="password2">
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="p-r-50 p-l-50">
                                        <button type="submit" class="text-white btn btn-danger btn-block active rounded">
                                        Create!
                                        </button>
                                    </div>
                                    <div class="text-white text-center p-t-20" style="font-size: 18px;">
                                        Do you have account? 
                                        <a href="<?= base_url('Auth')?>" class="fa" style= "color: #57FEFF;"> Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                              