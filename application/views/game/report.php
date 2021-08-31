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
                                            <a href="<?= base_url('Report/NewsReportPrint');?>" style="color: white;" type="button" class="btn btn-custon-four btn-primary compose-draft-bt"><i class="fa big-icon fa-print" style="margin-right: 9px;"></i>Print</a>

                                            <a href="<?= base_url('Report/NewsReportPDF');?>" style="color: white;" type="button" class="btn btn-custon-four btn-danger"><i class="fa big-icon fa-file-pdf-o" style="margin-right: 9px;"></i>PDF</a>

                                            <a href="<?= base_url('Report/NewsReportExcel');?>" style="color: white;" type="button" class="btn btn-custon-four btn-success"><i class="fa big-icon fa-file-excel-o" style="margin-right: 9px;"></i>Excel</a>
                                        </div>

                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar" style="padding-right: 100px;">
                                            <table id="table" data-toggle="table" data-resizable="true" data-cookie="true"  data-click-to-select="true" data-toolbar="#toolbar">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">ID News</th>
                                                        <th class="text-center">Title</th>
                                                        <th class="text-center">Editor</th>
                                                        <th class="text-center">Source</th>
                                                        <th class="text-center">Date Created</th>
                                                    </tr>
                                                </thead>
                                                <tbody >
                                                    <?php foreach($game as $game) { ?>
                                                        <tr>
                                                            <td><p class="text-center"><?= $game['id'] ?></p></td>
                                                            <td><p class=""><?= $game['judul']; ?></p></td>
                                                            <td><p class=""><?= $game['editor']; ?></p></td>
                                                            <td><p class=""><?= $game['source']; ?></p></td>
                                                            <td><p class=""><?= $game['date_created']; ?></p></td>
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