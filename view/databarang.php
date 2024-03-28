<?php
include "header.php";
?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group pull-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="">Highdmin</a></li>
                                <li class="breadcrumb-item active">Data Santri</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Data Santri</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kelas</th>
                                    <th>Sekolah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($brg->viewData() as $show) {
                                ?>
                                <tr>
                                    <td><?php echo $show['nis'] ?></td>
                                    <td><?php echo $show['nama'] ?></td>
                                    <td><?php echo $show['jkelamin'] ?></td>
                                    <td><?php echo $show['alamat'] ?></td>
                                    <td><?php echo $show['kelas'] ?></td>
                                    <td><?php echo $show['sekolah'] ?></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-warning waves-light waves-effect"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger waves-light waves-effect"><i class="fa fa-trash"></i></a>
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
    
    <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Required datatable js -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <script src="plugins/jquery-knob/jquery.knob.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script>
            $(document).ready(function() {
                // Default Datatable
                $('#datatable').DataTable();
            });
        </script>