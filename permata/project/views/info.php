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
                        <li><a href="shop.php">Layanan</a></li>
                        <li>
                            <a href="about.php">Tentang Toko</a>
                        </li class="active">
                        <li><a href="info.php">Informasi</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="index.php">Beranda</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Informasi</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section border-bottom" data-aos="fade">
            <div class="container">
                <?php
                $queryInfo = mysqli_query($conn, "SELECT judul_info, gambar_info, tgl_info, deskripsi_info FROM tb_promosi ORDER BY tgl_info DESC");
                $countInfo = mysqli_num_rows($queryInfo);
                if ($countInfo > 0) {
                    while ($dataInfo = mysqli_fetch_array($queryInfo)) { ?>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <div class="block-16">
                                    <figure>
                                        <img src="../../../image/info/<?= $dataInfo['gambar_info']; ?>" alt="Image placeholder" class="img-fluid rounded">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">


                                <div class="site-section-heading pt-3 mb-4">
                                    <h2 class="text-black"><?= $dataInfo['judul_info']; ?></h2>
                                    <h6><?= $dataInfo['tgl_info'] ?></h6>
                                </div>
                                <p><?= $dataInfo['deskripsi_info']; ?></p>

                            </div>
                        </div>
                        <!-- /.row -->
                    <?php
                    }
                } else {
                    ?>
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <div class="block-16">
                                <figure>
                                    <img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">


                            <div class="site-section-heading pt-3 mb-4">
                                <h2 class="text-black">How We Started</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus quos sequi hic fugiat asperiores illum. Atque, in, fuga excepturi corrupti error corporis aliquam unde nostrum quas.</p>
                            <p>Accusantium dolor ratione maiores est deleniti nihil? Dignissimos est, sunt nulla illum autem in, quibusdam cumque recusandae, laudantium minima repellendus.</p>

                        </div>
                    </div>
                    <!-- /.row -->
                <?php } ?>
            </div>
        </div>

        <?php
        include_once "footer.php";
        ?>