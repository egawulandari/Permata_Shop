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
                        <li class="active">
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
                    <div class="col-md-12 mb-0"><a href="index.php">Beranda</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Profil Toko</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section border-bottom" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <figure>
                                <?php
                                $queryTampilFoto = mysqli_query($conn, "SELECT foto_toko FROM tb_profil_toko");
                                $countRecordFoto = mysqli_num_rows($queryTampilFoto);
                                if ($countRecordFoto > 0) {
                                    while ($dataFoto = mysqli_fetch_array($queryTampilFoto)) { ?>
                                        <img src="../../../image/profil/<?= $dataFoto['foto_toko']; ?>" alt="Image placeholder" class="img-fluid rounded">
                                    <?php
                                    }
                                } else { ?>
                                    <img src="" alt="Image placeholder" class="img-fluid rounded">
                                <?php
                                }
                                ?>

                            </figure>
                        </center>
                    </div>
                </div>
                <br />
                <div class="row mb-5">
                    <div class="col-md-12">
                        <center>
                            <h2 class="text-black">TENTANG KAMI</h2>
                        </center>
                        <br />
                        <?php
                        $queryTampilProfil = mysqli_query($conn, "SELECT deskripsi_toko, alamat_toko, nomor_telpon_toko, email_toko FROM tb_profil_toko");
                        $countRecordProfil = mysqli_num_rows($queryTampilProfil);
                        if ($countRecordProfil > 0) {
                            while ($dataProfil = mysqli_fetch_array($queryTampilProfil)) { ?>
                                <center>
                                    <p><?= $dataProfil['deskripsi_toko']; ?></p>
                                </center>
                            <?php
                            }
                        } else { ?>
                            <p>Tidak Ada Profil</p>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>

        <?php
        include_once "footer.php";
        ?>