<?php
include_once "main.php";
?>

<body>

    <div class="site-wrap">
        <header class="site-navbar" role="banner">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div>
                                <a href="index.php">
                                    <h3><img src="../../../image/icon/diamond.png" width="50"><b>PERMATA</b></h3>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <div class="site-top-icons">
                                <ul>
                                    <li><a href="#"><span class="icon icon-person"></span></a></li>
                                    <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                                    <li>
                                        <a href="cart.html" class="site-cart">
                                            <span class="icon icon-shopping_cart"></span>
                                            <span class="count">2</span>
                                        </a>
                                    </li>
                                    <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <nav class="site-navigation text-right text-md-center" role="navigation">
                <div class="container">
                    <ul class="site-menu js-clone-nav d-none d-md-block">
                        <li class="active">
                            <a href="index.php">Beranda</a>
                        </li>
                        <li><a href="shop.php">Layanan</a></li>
                        <li>
                            <a href="about.php">Tentang Toko</a>
                        </li>
                        <li><a href="info.php">Informasi</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="site-blocks-cover" style="background-image: url(../../../image/wall/wall3.jpg);" data-aos="fade">
            <div class="container">
                <div class="row align-items-start align-items-md-center justify-content-end">
                    <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                        <h1 class="mb-2">Permata Percetakan Online Dengan Pelayanan Yang Baik</h1>
                        <div class="intro-text text-center text-md-left">
                            <p class="mb-4">Kami Percetakan Online Terbaik Di Banjarnegara. Dengan Kualitas Cetak Yang baik, Biaya Pengiriman Terjangkau Dan Pengiriman Cepat Menjadikan Kami Pilihan Terbaik. </p>
                            <p>
                                <a href="shop.php" class="btn btn-sm btn-primary">Pesan Sekarang</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section site-section-sm site-blocks-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-truck"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Pengiriman Cepat</h2>
                            <p>Pengiriman menggunakan ekspedisi J8T Express.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-money"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Harga Terjangkau</h2>
                            <p>Harga pesanan dan biaya kirim tidak membuat dompet menangis.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-phone"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Respon Cepat</h2>
                            <p>Pemrosesan pesanan dikerjakan dengan cepat hingga pengiriman dan barang sampai di tangan pelanggan. Apabila terdapat komplain kami siap melayani sepanjang jam kerja operasional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section block-3 site-blocks-2 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Layanan</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="nonloop-block-3 owl-carousel">
                            <?php
                            $varLayDis = "SELECT id_layanan, nama_layanan, foto_layanan, harga_layanan
                                          FROM tb_layanan WHERE status_layanan = 'Tersedia'";
                            $varQueryLayDis = mysqli_query($conn, $varLayDis);
                            $varCountLayDis = mysqli_num_rows($varQueryLayDis);
                            if ($varCountLayDis > 0) {
                                while ($dataLayDis = mysqli_fetch_array($varQueryLayDis)) {
                            ?>
                                    <div class="item">
                                        <div class="block-4 text-center">
                                            <figure class="block-4-image img-show-case">
                                                <img src="../../../image/layanan/<?= $dataLayDis['foto_layanan']; ?>" alt="Image placeholder" class="img-fluid">
                                            </figure>
                                            <div class="block-4-text p-4">
                                                <h3><a href="shop_detail.php?id_shop=<?= $dataLayDis['id_layanan']; ?>"><?= $dataLayDis['nama_layanan']; ?></a></h3>
                                                <p class="mb-0">Buat Pesanan</p>
                                                <p class="text-primary font-weight-bold">Rp <?= $dataLayDis['harga_layanan']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                            } else { ?>
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image img-show-case">
                                            <img src="#" alt="Image placeholder" class="img-fluid">
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a href="#">Blank</a></h3>
                                            <p class="mb-0">Blank</p>
                                            <p class="text-primary font-weight-bold">Rp 0</p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        include_once "footer.php";
        ?>