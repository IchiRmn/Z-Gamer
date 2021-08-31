        <!-- Breadcome start-->
        <div class="breadcome-area mg-b-30 small-dn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="breadcome-heading">
                                        <h2>Regristration User</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcome End-->
            <!-- Register Start-->
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row" style="padding-bottom: 60px; padding-top: 40px;">
                        <div class="col-lg-3" ></div>
                        <form id="adminpro-register-form" class="adminpro-form" method="post" action="<?= base_url('Profile/inputUser'); ?>">
                            <div class="col-lg-6" >
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Registration Form</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Username</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" value="<?= set_value('name'); ?>" id="name" placeholder="PlatinumAxe" name="name" >
                                                <i class="fa fa-user login-user"></i>
                                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Email Address</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="email" name="email" id="email" value="<?= set_value('email'); ?>" placeholder="Mail@gmail.com">
                                                <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Password</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="password" name="password1" id="password1" placeholder="*****">
                                                <i class="fa fa-lock login-user"></i>
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Confirm Password</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="password" name="password2" id="password2" placeholder="*****">
                                                <i class="fa fa-lock login-user"></i>
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <a href="<?= base_url('Profile/dataUser');?>" type="button" class="login-button login-button-rg">Back</a>
                                                <button type="submit" class="login-button login-button-lg">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            <!-- Register End-->
        </div>
    </div>