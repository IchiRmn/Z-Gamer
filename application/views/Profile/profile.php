    <section class="cart p-t-70 p-b-50" style="background-image: url(<?=base_url()?>assets/images/back2.jpg); background-size: 100%;">
        <div class="container">
    <!-- Total -->

    <div class="justify-content-center p-l-250 p-r-250 m-t-40">
            <div class="bo9 p-l-40 p-r-40 p-t-30 p-b-38 " style="background-color: black;">
                <h5 class="m-text20 p-b-12 p-t-12 text-center text-white bo-rad-23" style="background-color: #C11B17;">
                    My Profile
                </h5>
                <div class="text-center">
                <?= $this->session->flashdata('alert'); ?>
                </div>
                <div class="p-t-50 p-b-50">
                    <img class="rounded" src="<?= base_url('assets/images/Profile/'). $img;?>" style="width: 35%; margin-left: 32%;">
                </div>
                <!--  -->
                <div class="flex-w flex-sb-m p-b-12 p-l-30">
                    <span class="w-size19 w-full-sm text-white m-text20">
                        Email
                    </span>

                    <span class="m-text21 w-size20 w-full-sm text-white h4">
                        <span class="p-r-10 p-l-10"> : </span> <?= $email; ?>
                    </span>
                </div>
                <div class="flex-w flex-sb-m p-b-12 p-l-30">
                    <span class="w-size19 w-full-sm text-white m-text20">
                        Name
                    </span>

                    <span class="m-text21 w-size20 w-full-sm text-white h4">
                        <span class="p-r-10 p-l-10"> : </span> <?= $name; ?>
                    </span>
                </div>
                <div class="flex-w flex-sb-m p-b-12 p-l-30">
                    <span class="w-size19 w-full-sm text-white m-text20">
                        Join in
                    </span>

                    <span class="m-text21 w-size20 w-full-sm text-white h4">
                        <span class="p-r-10 p-l-10"> : </span> <?= $date; ?>
                    </span>
                </div>

             
                    <div class="row p-l-40 p-t-30">
                        <div class="col">
                            <div class="size14 trans-0-4 m-b-10 ">
                                
                                <a href="<?= base_url('Home');?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                Back
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="size14 trans-0-4 m-b-10">
                                <!-- Button -->
                                <a href="<?= base_url('Profile/changeProfile')?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                Edit Profile
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>

                <!--  -->
            </div>
        </div>
        </div>
    </section>