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
                        <li>
                            <a href="index.php">Beranda</a>
                        </li>
                        <li class="active"><a href="shop.php">Layanan</a></li>
                        <li>
                            <a href="about.php">Tentang Toko</a>
                        </li>
                        <li><a href="info.php">Informasi</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="index.php">Beranda</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Layanan</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-md-12 order-2">

                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="float-md-left mb-4">
                                    <h2 class="text-black h5">Semua Layanan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <?php
                            $varLayDis = "SELECT id_layanan, nama_layanan, foto_layanan, deskripsi_layanan, harga_layanan
                                          FROM tb_layanan WHERE status_layanan = 'Tersedia'";
                            $varQueryLayDis = mysqli_query($conn, $varLayDis);
                            $varCountLayDis = mysqli_num_rows($varQueryLayDis);
                            if ($varCountLayDis > 0) {
                                while ($dataLayDis = mysqli_fetch_array($varQueryLayDis)) {
                            ?>
                                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-down">
                                        <div class="block-4 text-center border">
                                            <figure class="block-4-image img-show-case">
                                                <a href="shop_detail.php?id_shop=<?= $dataLayDis['id_layanan']; ?>"><img src="../../../image/layanan/<?= $dataLayDis['foto_layanan']; ?>" alt="Image placeholder" class="img-fluid" width="230"></a>
                                            </figure>
                                            <div class="block-4-text p-4">
                                                <h3><a href="shop_detail.php?id_shop=<?= $dataLayDis['id_layanan']; ?>"><?= $dataLayDis['nama_layanan']; ?></a></h3>
                                                <p class="mb-0"><?= $dataLayDis['deskripsi_layanan']; ?></p>
                                                <p class="text-primary font-weight-bold">Rp <?= $dataLayDis['harga_layanan']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } else { ?>
                                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                    <div class="block-4 text-center border">
                                        <figure class="block-4-image img-show-case">
                                            <a href="shop_detail.php"><img src="#" alt="Image placeholder" class="img-fluid"></a>
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a href="shop_detail.php">Blank</a></h3>
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