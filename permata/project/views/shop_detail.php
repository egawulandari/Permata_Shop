<?php
if (!isset($_GET['id_shop'])) { ?>
    echo '<script>
        alert("Pilih Layanan Terlebih Dahulu!");
        window.location.href = "shop.php";
    </script>';
<?php
} else {
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
                        <div class="col-md-12 mb-0"><a href="index.php">Beranda</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Detail Layanan</strong></div>
                    </div>
                </div>
            </div>

            <div class="site-section">
                <div class="container">
                    <div class="row">
                        <?php
                        $queryTampilDetail = mysqli_query($conn, "SELECT nama_layanan, foto_layanan, deskripsi_layanan, harga_layanan
                                          FROM tb_layanan WHERE id_layanan = '" . $_GET['id_shop'] . "'");
                        $countDetail = mysqli_num_rows($queryTampilDetail);
                        if ($countDetail > 0) {
                            while ($dataDetail = mysqli_fetch_array($queryTampilDetail)) { ?>
                                <div class="col-md-6">
                                    <img src="../../../image/layanan/<?= $dataDetail['foto_layanan']; ?>" alt="Image" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <h2 class="text-black"><?= $dataDetail['nama_layanan']; ?></h2>
                                    <p><?= $dataDetail['deskripsi_layanan']; ?></p>
                                    <p><strong class="text-primary h4">Harga Pokok : Rp <?= $dataDetail['harga_layanan']; ?></strong></p>
                                    <div class="mb-1 d-flex">
                                        <label for="option-sm" class="d-flex mr-3 mb-3">
                                            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">Small</span>
                                        </label>
                                        <label for="option-md" class="d-flex mr-3 mb-3">
                                            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">Medium</span>
                                        </label>
                                        <label for="option-lg" class="d-flex mr-3 mb-3">
                                            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">Large</span>
                                        </label>
                                        <label for="option-xl" class="d-flex mr-3 mb-3">
                                            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra Large</span>
                                        </label>
                                    </div>
                                    <div class="mb-5">
                                        <div class="input-group mb-3" style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                            </div>
                                            <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                            </div>
                                        </div>

                                    </div>
                                    <p><a href="cart.html" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

                                </div>
                            <?php
                            }
                        } else { ?>
                            <div class="col-md-6">
                                <img src="../../vendor/images/cloth_1.jpg" alt="Image" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h2 class="text-black">Tank Top T-Shirt</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores fuga voluptas, distinctio, aperiam, ratione dolore.</p>
                                <p class="mb-4">Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.</p>
                                <p><strong class="text-primary h4">$50.00</strong></p>
                                <div class="mb-1 d-flex">
                                    <label for="option-sm" class="d-flex mr-3 mb-3">
                                        <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">Small</span>
                                    </label>
                                    <label for="option-md" class="d-flex mr-3 mb-3">
                                        <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">Medium</span>
                                    </label>
                                    <label for="option-lg" class="d-flex mr-3 mb-3">
                                        <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">Large</span>
                                    </label>
                                    <label for="option-xl" class="d-flex mr-3 mb-3">
                                        <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra Large</span>
                                    </label>
                                </div>
                                <div class="mb-5">
                                    <div class="input-group mb-3" style="max-width: 120px;">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                        </div>
                                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                        </div>
                                    </div>

                                </div>
                                <p><a href="cart.html" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>

        <?php
        include_once "footer.php";
    }
        ?>