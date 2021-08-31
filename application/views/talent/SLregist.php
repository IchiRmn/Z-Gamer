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
        <div class="justify-content-center p-l-150 p-r-150 p-t-40">
            <div class="bo9 p-l-40 p-r-40 p-t-30 p-b-38 " style="background-color: black;">
                <h5 class="m-text20 p-b-12 p-t-12 m-l-100 m-r-100 text-center text-white bo-rad-23" style="background-color: #C11B17;">
                        Registration
                </h5>
                <div class="row p-t-30 p-b-30">
                    <div class="col-5 text-center">
                        <div class="">
                            <img class="rounded" src="<?= base_url('assets/images/Tournament/'. $image)?>" style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <div class="col">
                                <h1 class="text-white text-center text-right"><?= $n; ?></h1>
                            </div>
                        </div>
                        <hr class="m-t-0" color="white">
                        <div class="row">
                            <div class="col">
                                <p style="font-style: italic;">Participation : <?= $this->ModelTour->getDataWhere('solo', ['id_tour' => $this->uri->segment(3)])->num_rows(); ?> </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table>
                                    <tr>
                                        <th class="s-text5 text-white">Game</th>
                                        <td class="s-text5 text-white p-l-10 p-r-10">:</td>
                                        <td class="s-text5 text-white"><?= $g;?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-auto">
                                <table>
                                    <tr>
                                        <th class="s-text5 text-white">Organizer</th>
                                        <td class="s-text5 text-white p-l-10 p-r-10">:</td>
                                        <td class="s-text5 text-white"><?= $organizer;?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <hr color="white" class="m-b-40">
                <form method="post" action="<?= base_url('Talent/SoloRegist/'.$id); ?>">
                    <div class="form-group p-b-20" style="padding-right: 300px;">
                        <label class="text-white m-text22" for="Full Name">Name</label>
                        <div class="row">
                            <div class="col">
                                <label class="text-white col-form-label">Full Name</label>
                                <input type="text" class="form-control rounded" style="" id="name" placeholder="Gorge Floyd" name="name" value="<?= set_value('name')?>">
                                    <?= form_error('first', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>                             
                    <div class="form-group p-b-20" style="padding-right: 400px;">
                        <label class="text-white m-text22" for="date">Date Of Birth</label>
                        <input type="date" class="form-control rounded" value="<?= set_value('dob')?>" id="dob" placeholder="" name="dob">
                        <?= form_error('dob', '<small class="text-danger pl-3">', '</small>'); ?>                
                    </div>
                    <div class="form-group p-b-20">
                        <label class="text-white m-text22" for="Full Name">Addres</label>
                        <div class="form-row">
                            <div class="col">
                                <label class="text-white col-form-label">Country</label>
                                <input type="text" class="form-control rounded" style="" id="country" placeholder="Indonesia" name="country" value="<?= set_value('country')?>">
                                <?= form_error('country', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col">
                                <label class="text-white col-form-label">City/Town</label>
                                <input type="text" class="form-control rounded" style="" id="city" placeholder="Bekasi" name="city" value="<?= set_value('city')?>">
                                <?= form_error('city', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group p-b-20" style="padding-right: 400px;">
                        <label class="text-white m-text22" for="date">Phone Number</label>
                        <input type="text" class="form-control rounded" value="<?= set_value('phone')?>" id="phone" placeholder="+6288888888" name="phone">
                        <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>                
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <div class="text-right">
                                <a href="<?= base_url('Talent/Solo')?>" role="button" class="text-white btn bg1 hov1 btn-md active rounded">
                                Cancel
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-right ">
                                <button type="submit" class="boton text-white btn rounded " style="padding-right: 30px; padding-left: 30px;">
                                    Join!
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>          