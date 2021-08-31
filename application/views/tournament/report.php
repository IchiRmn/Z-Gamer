        <!-- Breadcome start-->
        <div class="breadcome-area mg-b-30 small-dn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="breadcome-heading">
                                        <h2>Report</h2>
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
                                            <a href="<?= base_url('Report/TourReportPrint');?>" style="color: white;" type="button" class="btn btn-custon-four btn-primary compose-draft-bt"><i class="fa big-icon fa-print" style="margin-right: 9px;"></i>Print</a>

                                            <a href="<?= base_url('Report/TourReportPDF');?>" style="color: white;" type="button" class="btn btn-custon-four btn-danger"><i class="fa big-icon fa-file-pdf-o" style="margin-right: 9px;"></i>PDF</a>

                                            <a href="<?= base_url('Report/TourReportExcel');?>" style="color: white;" type="button" class="btn btn-custon-four btn-success"><i class="fa big-icon fa-file-excel-o" style="margin-right: 9px;"></i>Excel</a>
                                        </div>

                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar" style="padding-right: 100px;">
                                            <table id="table" data-toggle="table" data-resizable="true" data-cookie="true"  data-click-to-select="true" data-toolbar="#toolbar">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">ID</th>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Game</th>
                                                        <th class="text-center">Category</th>
                                                        <th class="text-center">Organizer</th>
                                                        <th class="text-center">Date Begin</th>
                                                        <th class="text-center">Date Created</th>
                                                    </tr>
                                                </thead>
                                                <tbody >
                                                    <?php foreach($tour as $t) { ?>
                                                        <tr>
                                                            <td><p class="text-center"><?= $t['id_tour'] ?></p></td>
                                                            <td><p class=""><?= $t['name_tour']; ?></p></td>
                                                            <td><p class=""><?= $t['game_tour']; ?></p></td>
                                                            <td><p class=""><?= $t['category']; ?></p></td>
                                                            <td><p class=""><?= $t['organizer']; ?></p></td>
                                                            <td><p class=""><?= $t['date_tour']; ?></p></td>
                                                            <td><p class=""><?= $t['date_']; ?></p></td>
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