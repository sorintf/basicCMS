<?php include_once('views/_a_head.php'); ?>

<?php include_once('views/_a_header.php'); ?>



    <!-- [ Main Content 01 ] start -->
    <div class="pc-container">
        <div class="pc-content">

            <?php include_once('views/_a_breadcrumb.php'); ?>

            <!-- [ Main Content 02 ] start -->
            <div class="row">

                <?php include_once('views/_messages.php'); ?>

                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Base Style - Hover</h5>
                            <small
                            >This example shows DataTables with just the hover class specified. This class instructs DataTables' styling to highlight
                            a row when the mouse is hovered over it.</small
                            >
                        </div>
                        <div class="card-body">
                            <div class="dt-responsive table-responsive">
                                <table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Prenume</th>
                                            <th>Nume</th>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            <th>Status</th>
                                            <th>Admin</th>
                                            <th>Accord NL</th>
                                            <th>Data creearii</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($adminFunctions->rep['users_list'] as $key => $value): ?>
                                            <tr>
                                                <td><?php echo $value['username']; ?></td>
                                                <td><?php echo $value['firstname_user']; ?></td>
                                                <td><?php echo $value['lastname_user']; ?></td>
                                                <td><?php echo $value['email_user']; ?></td>
                                                <td><?php echo $value['tel_user']; ?></td>
                                                <td><?php echo $value['status']; ?></td>
                                                <td><?php echo $value['admin_status']; ?></td>
                                                <td><?php echo $value['acc_nl']; ?></td>
                                                <td><?php echo $value['created_time']; ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Username</th>
                                            <th>Prenume</th>
                                            <th>Nume</th>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            <th>Status</th>
                                            <th>Admin</th>
                                            <th>Accord NL</th>
                                            <th>Data creearii</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content 02 ] end -->
        </div>
    </div>
    <!-- [ Main Content 01 ] end -->



<?php include_once('views/_a_footer.php'); ?>