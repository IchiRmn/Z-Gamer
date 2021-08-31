<section class="cart p-t-70 p-b-50" style="background-image: url(<?=base_url()?>assets/images/back2.jpg); background-size: 100%;">
     <div class="container">
    <!--  -->
    <div class="justify-content-center p-l-250 p-r-250 p-t-40">
        <div class="bo9 p-l-40 p-r-40 p-t-30 p-b-38 " style="background-color: black;">
            <h5 class="m-text20 p-b-12 p-t-12 text-center text-white bo-rad-23" style="background-color: #C11B17;">
                    Edit Profile
            </h5>
            <div class="p-t-50 p-b-50">
                <img class="rounded" src="<?= base_url('assets/images/Profile/'). $img;?>" style="width: 35%; margin-left: 32%;">
            </div>
            <!--  -->
            <?= form_open_multipart('Profile/changeProfile'); ?>
                <div class="form-group p-b-20">
                    <label class="text-white col-form-label" for="email">Email</label>
                    <input type="text" class="form-control rounded" style="" id="text" placeholder="Email@gmail.com" name="email" value="<?= $email?>" readonly>
                    <label class="text-gray text-right col-form-label s-text7" for="email">Read only</label>
                </div>                             
                <div class="form-group">
                    <label class="text-white col-form-label" for="name">Username</label>
                    <input type="text" class="form-control form-control-user rounded" value="<?= $name;?>" id="name" placeholder="Username" name="name">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>  
                <div class="form-group p-t-10">
                    <div class="row">
                        <div class="col-4">
                            <label class="text-white col-form-label" for="formGroupExampleInput">Photo Profile</label>
                        </div>
                        <div class="col">
                            <label class="custom-file">
                                <input type="file" id="image" name="image"class="custom-file-input">
                                <span class="custom-file-control" for="image">Choose File</span>
                                <h1 class="s-text7 text-white p-t-5">Maximun size 5mb </h1>
                            </label>
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
            </div>
        </div>
    </div>
</section>