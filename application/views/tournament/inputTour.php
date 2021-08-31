        <!-- Breadcome start-->
        <div class="breadcome-area mg-b-30 small-dn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="breadcome-heading">
                                        <h2>Input Data</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcome End-->
            <!-- Checkout Start-->
            <div class="login-form-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form id="adminpro-checkout-form" class="adminpro-form" method="post" action="<?= base_url('Tournament/inputTour'); ?>" enctype="multipart/form-data">
                            <div class="col-md-12 col-sm-12 col-xs-12" style="padding-right: 90px; padding-left: 90px;">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Tournament</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="login-input-head">
                                                <p>Name</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="login-input-area">
                                                <input type="text" name="name" id="name" value="<?= set_value('name'); ?>">
                                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="login-input-head">
                                                <p>Game</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="login-input-area">
                                                <input type="text" name="game" id="game" value="<?= set_value('game'); ?>">
                                                <?= form_error('game', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="login-input-head">
                                                <p>Category</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="form-select-list" style="padding-right: 15px; margin-top: 10px;">
                                                <select class="form-control custom-select-value" name="category" id="category">
                                                    <option hidden value="<?= set_value('category'); ?>">Select Category</option>
                                                    <option value="1">Solo</option>
                                                    <option value="2">Squad</option>
                                                </select>
                                                <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="login-input-head">
                                                <p>Organizer</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="login-input-area">
                                                <input type="text" name="organizer" id="organizer" value="<?= set_value('organizer'); ?>">
                                                <?= form_error('organizer', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="login-input-head">
                                                <p>Start From</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="login-input-area" style="color: white; margin-top: 10px;">
                                                <input type="date" name="start" id="start" value="<?= set_value('start'); ?>">
                                                <?= form_error('start', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="login-input-head">
                                                <p>Description</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="login-textarea-area">
                                                <textarea name="desc" id="desc" class="contact-message" cols="30" rows="10">
                                                    <?= set_value('desc'); ?>
                                                </textarea>
                                                <?= form_error('desc', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-lg-3">
                                            <div class="login-input-head">
                                                <p>Images</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="file-upload-inner file-upload-inner-right ts-forms" style="margin-top: 25px; padding-right: 300px;">
                                                <div class="input append-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" onchange="document.getElementById('append-small-btn').value = this.value;" name="image" id="image">
                                                    </div>
                                                    <input type="text" id="append-small-btn" placeholder="no file selected" name="image" name="image">
                                                    <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <label><p style="color: white; margin-top: 10px; font-style: italic;"> Maximal file 2mb</p></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8"></div>
                                        <div class="col-lg-4">
                                            <div class="login-button-pro">
                                                <a href="<?= base_url('Tournament/tourData');?>" class="login-button login-button-rg">Cancel</a>
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
            <!-- Checkout End-->
        </div>
    </div>