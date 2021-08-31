<style type="text/css">
    .boton {
        background-color: #1E90FF !important;
    }
    .boton:hover{
        background-color:  #48D1CC !important;
        text-decoration: underline;
    }
</style>
<section class="cart p-t-70 p-b-50" style="background-image: url(<?=base_url()?>assets/images/back2.jpg); background-size: 100%;">
    <div class="container">
        <div class="justify-content-center p-l-160 p-r-160 p-t-40">
            <div class="bo9 p-l-40 p-r-40 p-t-30 p-b-38 " style="background-color: black;">
                <h5 class="m-text20 p-b-12 p-t-12 m-l-50 m-r-50 text-center text-white bo-rad-23" style="background-color: #C11B17;">
                        Welcome Challenger!
                </h5>
                <hr color="white" class="m-b-8 m-l-250 m-t-50">
                <div class="row">
                    <div class="col">
                        <h1 class="m-text5 text-right text-white m-r-10">Profile</h1>
                    </div>  
                </div>
                <!--Profile-->
                <hr color="white" class="m-t-0 m-l-250">
                <div class="row">
                    <div class="col col-sm-auto text-left">
                         <div style="max-height: 250px; max-width: 2500px;">
                            <img class="rounded" src="<?= base_url('assets/images/Profile/'.$image)?>" style="max-height:250px; max-width: 250px;">
                        </div>
                    </div>
                    <div class="col-6 m-t-10 m-l-0">
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 18px">Username</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 18px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 18px"><?=$na;?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 18px">Email</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 18px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 18px"><?=$mail;?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 18px">ID Regist</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 18px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 18px"><?=$d;?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 18px">Full Name</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 18px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 18px"><?=$fll;?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 15px">Date of Birth</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 18px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 18px"><?=$dob;?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 18px">Country</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 18px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 18px"><?=$coun;?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 18px">City</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 18px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 18px"><?=$cit;?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 18px">Phone</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 18px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 18px"><?=$ph;?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->

                <!--Detail Tournamnet-->
                <hr color="white" class="m-b-8 m-r-250 m-t-50">
                <div class="row">
                    <div class="col">
                        <h1 class="m-text5 text-left text-white m-l-10">Detail Tournament</h1>
                    </div>  
                </div>
                <hr color="white" class="m-t-0 m-r-250">
                <div class="row">
                    <div class="col m-t-10 m-l-0">
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 20px">Tournament</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 20px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 20px"><?=$nt;?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 20px">Game</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 20px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 20px"><?=$ge;?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 20px">Date</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 20px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 20px"><?=$dtt;?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 20px">Category</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 20px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 20px"><?=$ctg;?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 text-left">
                                <span class="text-white m-text20" style="font-size: 20px">Organizer</span>
                            </div>
                            <div class="col-2 text-center">
                                <span class="text-white m-text20"style="font-size: 20px">:</span>
                            </div>
                            <div class="col-5">
                                <span class="text-white m-text21" style="font-size: 20px"><?=$org;?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                         <div style="max-height: 250px; max-width: 2500px;">
                            <img class="rounded" src="<?= base_url('assets/images/Tournament/'.$imgt)?>" style="max-height:250px; max-width: 250px;">
                        </div>
                    </div>
                </div>
                <hr color="white" class="m-b-40">
                    <div class="row">
                        <div class="col">
                            <div class="text-right">
                                <a href="<?= base_url('Talent')?>" role="button" class="text-white btn btn-md active bg1 hov1 rounded">
                                Back To Menu
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>          