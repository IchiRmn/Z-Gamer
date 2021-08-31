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
                                            <a href="<?= base_url('Report/UserReportPrint');?>" style="color: white;" type="button" class="btn btn-custon-four btn-primary compose-draft-bt"><i class="fa big-icon fa-print" style="margin-right: 9px;"></i>Print</a>

                                            <a href="<?= base_url('Report/UserReportPDF');?>" style="color: white;" type="button" class="btn btn-custon-four btn-danger"><i class="fa big-icon fa-file-pdf-o" style="margin-right: 9px;"></i>PDF</a>

                                            <a href="<?= base_url('Report/UserReportExcel');?>" style="color: white;" type="button" class="btn btn-custon-four btn-success"><i class="fa big-icon fa-file-excel-o" style="margin-right: 9px;"></i>Excel</a>
                                        </div>

                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar" style="padding-right: 300px;">
                                            <table id="table" data-toggle="table" data-resizable="true" data-cookie="true"  data-click-to-select="true" data-toolbar="#toolbar">
                                                <thead>
                                                    <tr>
                                                        <th data-field="id" class="text-center">ID User</th>
                                                        <th data-field="name" class="text-center">Name</th>
                                                        <th data-field="email" class="text-center">Email</th>
                                                        <th data-field="action" class="text-center">Role</th>
                                                        <th data-field="action" class="text-center">Date Join</th>
                                                    </tr>
                                                </thead>
                                                <tbody >
                                                    <?php foreach($user as $user) { ?>
                                                        <tr>
                                                            <td><p class="text-center"><?= $user['id'] ?></p></td>
                                                            <td><p class=""><?= $user['name']; ?></p></td>
                                                            <td><p class=""><?= $user['email']; ?></p></td>
                                                            <td><p class="text-center"><?= $user['role']; ?></p></td>
                                                            <td><p class="text-center"><?= $user['date_created']; ?></p></td>
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