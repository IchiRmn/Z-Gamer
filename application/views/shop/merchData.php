        <!-- Breadcome start-->
        <div class="breadcome-area mg-b-30 small-dn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="breadcome-heading">
                                        <h2>Merch Data</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcome End-->
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-graph">
                                        <div class="text-left" style="margin-left: 22px; margin-top: 5px;">
                                            <a href="<?= base_url('Shop/inputMerch');?>" style="color: white;" type="button" class="btn btn-custon-four btn-success"><i class="fa big-icon fa-plus-circle" style="margin-right: 6px;"></i>Input Data</a>
                                        </div>
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar" style="padding-right: 50px;">
                                            <table id="table" data-toggle="table" data-resizable="true" data-cookie="true"  data-click-to-select="true" data-toolbar="#toolbar">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">ID</th>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Price</th>
                                                        <th class="text-center">Category</th>
                                                        <th class="text-center">Store</th>
                                                        <th data-field="action" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody >
                                                    <?php foreach($merch as $m) { ?>
                                                        <tr>
                                                            <td><p class="text-center"><?= $m->id_merch; ?></p></td>
                                                            <td><p class=""><?= $m->name_merch; ?></p></td>
                                                            <td><p class="">$<?= $m->price_merch; ?></p></td>
                                                            <td><p class=""><?= $m->mcategory; ?></p></td>
                                                            <td><p class=""><?= $m->store_merch; ?></p></td>
                                                            <td class="datatable-ct">
                                                                <a href="<?=base_url('Shop/editMerch/'.$m->id_merch);?>" type="button" class="btn btn-custon-four btn-primary btn-sm"><i class="fa big-icon fa-edit"></i></a>
                                                                <a href="<?=base_url('Shop/deleteMerch/'.$m->id_merch);?>"type="button" class="btn btn-custon-four btn-danger btn-sm"><i class="fa big-icon fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End --> 
        </div>
    </div>