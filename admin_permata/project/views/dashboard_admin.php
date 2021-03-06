<?php
include_once "main.php";
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
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="dashboard_admin.php" class="nav-link active">
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
                            $varCountTotalUser = "SELECT COUNT(id_pengguna) as jml FROM tb_pengguna";
                            $varQueryTotalUser = mysqli_query($conn, $varCountTotalUser);
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
                            <a href="account.php" class="nav-link">
                                <i class="fas fa-check nav-icon"></i>
                                <p>Kelola Akun</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="blacklist.php" class="nav-link">
                                <i class="fas fa-check nav-icon"></i>
                                <p>Black List</p>
                                <?php
                                $varCountTotalBlok = "SELECT COUNT(id_pengguna) as jml FROM tb_pengguna WHERE status_akun ='Blocked'";
                                $varQueryTotalBlok = mysqli_query($conn, $varCountTotalBlok);
                                while ($dataTotalBlok = mysqli_fetch_array($varQueryTotalBlok)) {
                                ?>
                                    <span class="badge badge-danger right"><?= $dataTotalBlok['jml']; ?></span>
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
                    <h1 class="m-0 text-dark">Halaman Utama</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Utama</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Akun Baru</span>
                            <?php
                            $varSqlNewA = "SELECT count(id_pengguna) as baru FROM tb_pengguna WHERE status_akun ='Proses'";
                            $varConn1 = mysqli_query($conn, $varSqlNewA);
                            $varCount1 = mysqli_num_rows($varConn1);
                            if ($varCount1 > 0) {
                                while ($dataA = mysqli_fetch_array($varConn1)) {
                            ?>
                                    <span class="info-box-number"><?= $dataA['baru']; ?></span>
                                <?php
                                }
                            } else { ?>
                                <span class="info-box-number">0</span>
                            <?php
                            }
                            ?>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Pelanggan Aktif</span>
                            <?php
                            $varSqlAktif = "SELECT count(id_pengguna) as aktif FROM tb_pengguna WHERE status_akun='Aktif' AND id_level=3";
                            $varQueryAktif = mysqli_query($conn, $varSqlAktif);
                            $varCountAktif = mysqli_num_rows($varQueryAktif);
                            if ($varCountAktif > 0) {
                                while ($dataAktif = mysqli_fetch_array($varQueryAktif)) {
                            ?>
                                    <span class="info-box-number">
                                        <?= $dataAktif['aktif']; ?>
                                    </span>
                                <?php
                                }
                            } else {
                                ?>
                                <span class="info-box-number">
                                    0
                                </span>
                            <?php } ?>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Penilaian</span>
                            <?php
                            $varSqlNilai = "SELECT count(id_penilaian) AS nilai FROM tb_penilaian";
                            $varQueryNilai = mysqli_query($conn, $varSqlNilai);
                            $varCountNilai = mysqli_num_rows($varQueryNilai);
                            if ($varCountNilai > 0) {
                                while ($dataNilai = mysqli_fetch_array($varQueryNilai)) {
                            ?>
                                    <span class="info-box-number"><?= $dataNilai['nilai']; ?></span>
                                <?php
                                }
                            } else {
                                ?>
                                <span class="info-box-number">0</span>
                            <?php } ?>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Penjualan</span>
                            <?php
                            $varSqlJual = "SELECT count(id_transaksi) AS jual FROM tb_transaksi";
                            $varQueryJual = mysqli_query($conn, $varSqlJual);
                            $varCountJual = mysqli_num_rows($varQueryJual);
                            if ($varCountJual > 0) {
                                while ($dataJual = mysqli_fetch_array($varQueryJual)) {
                            ?>
                                    <span class="info-box-number"><?= $dataJual['jual']; ?></span>
                                <?php
                                }
                            } else {
                                ?>
                                <span class="info-box-number">0</span>
                            <?php } ?>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Penjualan</h3>
                                <a href="javascript:void(0);">Lihat Laporan</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">Rp18,230.00</span>
                                    <span>Grafik Penjualan Satu Tahun</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 33.1%
                                    </span>
                                    <span class="text-muted">Terhitung Sejak Bulan Terakhir</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="sales-chart" height="200"></canvas>
                            </div>

                            <div class="d-flex flex-row justify-content-end">
                                <span class="mr-2">
                                    <i class="fas fa-square text-primary"></i> Tahun Ini
                                </span>

                                <span>
                                    <i class="fas fa-square text-gray"></i> Tahun Lalu
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Pelanggan</h3>
                                <a href="javascript:void(0);">Lihat Laporan</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">200</span>
                                    <span>Grafik Pelanggan Satu Tahun</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 33.1%
                                    </span>
                                    <span class="text-muted">Terhitung Sejak Bulan Terakhir</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="sales-chart2" height="200"></canvas>
                            </div>

                            <div class="d-flex flex-row justify-content-end">
                                <span class="mr-2">
                                    <i class="fas fa-square text-primary"></i> Tahun Ini
                                </span>

                                <span>
                                    <i class="fas fa-square text-gray"></i> Tahun Lalu
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Pemesanan Terakhir</h3>

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
                                            <th>ID Transaksi</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Nominal Transaksi</th>
                                            <th>Status Pembayaran</th>
                                            <th>Status Pengiriman</th>
                                            <th>Status Transaksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $varTrans = "SELECT t.id_transaksi, p.nama_pelanggan, t.tgl_transaksi, t.total, e.status_pembayaran, k.status_pengiriman, t.status_transaksi 
                                        FROM tb_transaksi t INNER JOIN tb_pelanggan p ON p.id_pelanggan = t.id_pelanggan INNER JOIN tb_pembayaran e ON e.id_pembayaran=t.id_pembayaran
                                        INNER JOIN tb_pengiriman k ON k.id_pengiriman=t.id_pengiriman ORDER BY tgl_transaksi DESC LIMIT 7";
                                        $varQueryTrans = mysqli_query($conn, $varTrans);
                                        $varCountTrans = mysqli_num_rows($varQueryTrans);
                                        if ($varCountTrans > 0) {
                                            while ($dataTrans = mysqli_fetch_array($varQueryTrans)) {
                                        ?>
                                                <tr>
                                                    <td><a href="#"><?= $dataTrans['id_transaksi']; ?></a></td>
                                                    <td><?= $dataTrans['nama_pelanggan']; ?></td>
                                                    <td><?= $dataTrans['tgl_transaksi']; ?></td>
                                                    <td><?= $dataTrans['total']; ?></td>
                                                    <?php
                                                    if ($dataTrans['status_pembayaran'] == 'Belum Bayar') { ?>
                                                        <td><span class="badge badge-danger"><?= $dataTrans['status_pembayaran']; ?></span></td>
                                                    <?php
                                                    } else { ?>
                                                        <td><span class="badge badge-success"><?= $dataTrans['status_pembayaran']; ?></span></td>
                                                    <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($dataTrans['status_pengiriman'] == 'Diproses') { ?>
                                                        <td><span class="badge badge-danger"><?= $dataTrans['status_pengiriman']; ?></span></td>
                                                    <?php
                                                    } elseif ($dataTrans['status_pengiriman'] == 'Dikemas') { ?>
                                                        <td><span class="badge badge-warning"><?= $dataTrans['status_pengiriman']; ?></span></td>
                                                    <?php
                                                    } elseif ($dataTrans['status_pengiriman'] == 'Dikirim') { ?>
                                                        <td><span class="badge badge-info"><?= $dataTrans['status_pengiriman']; ?></span></td>
                                                    <?php
                                                    } else { ?>
                                                        <td><span class="badge badge-success"><?= $dataTrans['status_pengiriman']; ?></span></td>
                                                    <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($dataTrans['status_transaksi'] == 'Diproses') { ?>
                                                        <td><span class="badge badge-warning"><?= $dataTrans['status_transaksi']; ?></span></td>
                                                    <?php
                                                    } elseif ($dataTrans['status_pengiriman'] == 'Dibatalkan') { ?>
                                                        <td><span class="badge badge-danger"><?= $dataTrans['status_transaksi']; ?></span></td>
                                                    <?php
                                                    } else { ?>
                                                        <td><span class="badge badge-success"><?= $dataTrans['status_transaksi']; ?></span></td>
                                                    <?php
                                                    }
                                                    ?>
                                                </tr>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="7">
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
                        <div class="card-footer clearfix">
                            <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
                        </div>
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