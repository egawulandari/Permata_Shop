<?php
include_once "main.php"; //panggil file main.php
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard_admin.php" class="brand-link">
        <img src="../../../image/icon/diamond.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PERMATA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../../image/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="dashboard_admin.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Pelanggan
                            <i class="fas fa-angle-left right"></i>
                            <?php
                            $varCountTotalUser = "SELECT COUNT(id_pengguna) as jml FROM tb_pengguna"; //query hitung jml akun pengguna
                            $varQueryTotalUser = mysqli_query($conn, $varCountTotalUser); //eksekusi query
                            while ($dataTotalUser = mysqli_fetch_array($varQueryTotalUser)) {
                            ?>
                                <span class="badge badge-warning right"><?= $dataTotalUser['jml']; ?></span>
                            <?php } ?>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="verify.php" class="nav-link">
                                <i class="fas fa-check nav-icon"></i>
                                <p>Verifikasi Akun</p>
                                <?php
                                $varCountTotalNew = "SELECT COUNT(id_pengguna) as jml FROM tb_pengguna WHERE status_akun ='Proses'";
                                $varQueryTotalNew = mysqli_query($conn, $varCountTotalNew);
                                while ($dataTotalNew = mysqli_fetch_array($varQueryTotalNew)) {
                                ?>
                                    <span class="badge badge-info right"><?= $dataTotalNew['jml']; ?></span>
                                <?php } ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="account.php" class="nav-link active">
                                <i class="fas fa-check nav-icon"></i>
                                <p>Kelola Akun</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="blacklist.php" class="nav-link">
                                <i class="fas fa-check nav-icon"></i>
                                <p>Black List</p>
                                <?php
                                $varCountTotalNew = "SELECT COUNT(id_pengguna) as jml FROM tb_pengguna WHERE status_akun ='Proses'";
                                $varQueryTotalNew = mysqli_query($conn, $varCountTotalNew);
                                while ($dataTotalNew = mysqli_fetch_array($varQueryTotalNew)) {
                                ?>
                                    <span class="badge badge-danger right"><?= $dataTotalNew['jml']; ?></span>
                                <?php } ?>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="transaction.php" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Kelola Transaksi
                            <?php
                            $varCountTotalTrans = "SELECT COUNT(id_transaksi) as jml FROM tb_transaksi";
                            $varQueryTotalTrans = mysqli_query($conn, $varCountTotalTrans);
                            while ($dataTotalTrans = mysqli_fetch_array($varQueryTotalTrans)) {
                            ?>
                                <span class="badge badge-warning right"><?= $dataTotalTrans['jml']; ?></span>
                            <?php } ?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="catalog.php" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Kelola Layanan
                            <?php
                            $varCountTotalCat = "SELECT COUNT(id_layanan) as jml FROM tb_layanan";
                            $varQueryTotalCat = mysqli_query($conn, $varCountTotalCat);
                            while ($dataTotalCat = mysqli_fetch_array($varQueryTotalCat)) {
                            ?>
                                <span class="badge badge-warning right"><?= $dataTotalCat['jml']; ?></span>
                            <?php } ?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="info.php" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Kelola Informasi
                            <?php
                            $varCountTotalProm = "SELECT COUNT(id_info) as jml FROM tb_promosi";
                            $varQueryTotalProm = mysqli_query($conn, $varCountTotalProm);
                            while ($dataTotalProm = mysqli_fetch_array($varQueryTotalProm)) {
                            ?>
                                <span class="badge badge-warning right"><?= $dataTotalProm['jml']; ?></span>
                            <?php } ?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="profil.php" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Kelola Profil Toko
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="user_report.php" class="nav-link">
                                <i class="fas fa-check nav-icon"></i>
                                <p>Laporan Pelanggan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-check nav-icon"></i>
                                <p>Laporan Transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-check nav-icon"></i>
                                <p>Laporan Pendapatan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="calendar.php" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Kalender
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Kelola Akun</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pelanggan / Kelola Akun</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Akun Pengguna</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>ID Pengguna</th>
                                            <th>Username</th>
                                            <th>Level</th>
                                            <th>Tanggal Daftar</th>
                                            <th>Status Akun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $varUser = "SELECT p.id_pengguna, p.username, p.id_level, l.level_name, p.tgl_daftar, p.status_akun 
                                            FROM tb_pengguna p INNER JOIN tb_level l ON l.id_level=p.id_level ORDER BY p.tgl_daftar";
                                        $varQueryUser = mysqli_query($conn, $varUser);
                                        $varCountUser = mysqli_num_rows($varQueryUser);
                                        if ($varCountUser > 0) {
                                            while ($dataUser = mysqli_fetch_array($varQueryUser)) {
                                        ?>
                                                <tr>
                                                    <td><a href="#"><?= $dataUser['id_pengguna']; ?></a></td>
                                                    <td><?= $dataUser['username']; ?></td>
                                                    <td><?= $dataUser['level_name']; ?></td>
                                                    <td><?= $dataUser['tgl_daftar']; ?></td>
                                                    <?php
                                                    if ($dataUser['status_akun'] == 'Proses') { ?>
                                                        <td><span class="badge badge-primary"><?= $dataUser['status_akun']; ?></span></td>
                                                    <?php } elseif ($dataUser['status_akun'] == 'Aktif') {
                                                    ?>
                                                        <td><span class="badge badge-success"><?= $dataUser['status_akun']; ?></span></td>
                                                    <?php
                                                    } else { ?>
                                                        <td><span class="badge badge-danger"><?= $dataUser['status_akun']; ?></span></td>
                                                    <?php
                                                    }
                                                    ?>
                                                    <td><a href="#">Edit</a> | <a href="../process/account-delete.php?id_pengguna=<?= $dataUser['id_pengguna']; ?>">Hapus</a></td>
                                                </tr>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="6">
                                                    <center>--Tidak Ada Data--</center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <!-- <div class="card-footer clearfix">
                        </div> -->
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
</div>
<!-- /.content-wrapper -->


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.3-pre
    </div>
</footer>
</div>
<!-- ./wrapper -->
<?php
include_once "footer.php";
?>