    <!-- Breadcome start-->
        <div class="breadcome-area mg-b-30 small-dn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="breadcome-heading">
                                        <h2>Edit Profile</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcome End-->
        <?php 
            $id=$this->uri->segment(3);
            $user = $this->ModelUser->cekData(['id'=>$id])->row_array(); 
        ?>
            <!-- Review Start-->
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form id="adminpro-review-form" class="adminpro-form" method="post" action="<?= base_url('Profile/editProfile'); ?>" enctype="multipart/form-data">
                            <div class="col-lg-6">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                                <a href="#"><img src="<?= base_url('assets/images/Profile/'.$user['image']);?>" alt="" style="width: 50%;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Your Name</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="name" id="name" value="<?= $user['name'];?>">
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
                                                <input type="email" readonly class="form-control" name="email" id="email" value="<?= $user['email'];?>">
                                                <label><p style="color: white; font-style: italic; margin-left: 4px;">readonly</p></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 6px;">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Photo Profile</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                             <div class="file-upload-inner file-upload-inner-right ts-forms" style="padding-right: 17px;">
                                                <div class="input append-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" onchange="document.getElementById('append-small-btn').value = this.value;" name="image" id="image">
                                                    </div>
                                                    <input type="text" id="append-small-btn" placeholder="no file selected" name="image" name="image">
                                                </div>
                                            </div>
                                            <label><p style="color: white; margin-top: 5px; font-style: italic;"> Maximal file 5mb</p></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-9"></div>
                                        <div class="col-lg-3">
                                            <div class="login-button-pro">
                                                <button type="submit" class="login-button login-button-lg">Save</button>
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
            <!-- Review End-->
        </div>
    </div>