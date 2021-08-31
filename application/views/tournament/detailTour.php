<section class="cart p-t-70 p-b-50" style="background-image: url(<?=base_url()?>assets/images/back2.jpg); background-size: 100%;">
    <div class="container">
        <div class="justify-content-center m-t-40">
            <div class="bo9 p-l-40 p-r-40 p-t-30 p-b-38 " style="background-color: black;">
                <div class="row">
                    <div class="col-auto">
                        <div style="max-height: 300px; max-width: 300px;">
                            <img class="rounded" src="<?= base_url('assets/images/Tournament/') . $image; ?>" style="max-height:300px; max-width: 300px;">
                        </div>
                    </div>
                    <div class="col">
                        <h1 class="m-text5 text-center text-white"><?= $n;?></h1>
                        <hr color="white">
                        <div class="row p-l-10 p-t-20">
                            <div class="col">
                                <table>
                                    <tr>
                                        <th class="m-text3 text-white">Game</th>
                                        <td class="h5 text-white p-l-30 p-r-30">:</td>
                                        <td class="h5 text-white"><?= $g;?></td>
                                    </tr>
                                    <tr>
                                        <th class="m-text3 text-white">Category</th>
                                        <td class="h5 text-white p-l-30 p-r-30">:</td>
                                        <td class="h5 text-white"><?= $ctg;?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col">
                                <table>
                                    <tr>
                                        <th class="m-text3 text-white">Date</th>
                                        <td class="h5 text-white p-l-30 p-r-30">:</td>
                                        <td class="h5 text-white"><?= $d;?></td>
                                    </tr>
                                     <tr >
                                        <th class="m-text3 text-white">Organizer</th>
                                        <td class="h5 text-white p-l-30 p-r-30">:</td>
                                        <td class="h5 text-white"><?= $organizer;?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-t-30">
                    <div class="col">
                        <h1 class="h4 text-white">Description</h1>
                        <p style="text-indent: 5%; text-align: justify;"><?= $dec;?></p>
                    </div>
                </div>
                <div class="p-t-30">
                    <div class="col row justify-content-end ">
                        <div class="size14 trans-0-4 m-b-10">
                            <button onclick="window.history.go(-1)" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                Back
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>