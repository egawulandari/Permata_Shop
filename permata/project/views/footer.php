 <footer class="site-footer border-top">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 mb-5 mb-lg-0">
                 <div class="row">
                     <div class="col-md-12">
                         <h3 class="footer-heading mb-4">Navigations</h3>
                     </div>
                     <div class="col-md-6 col-lg-4">
                         <ul class="list-unstyled">
                             <li><a href="index.php">Beranda</a></li>
                             <li><a href="shop.php">Layanan</a></li>
                             <li><a href="about.php">Tentang</a></li>
                             <li><a href="info.php">Informasi</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

             </div>
             <?php
                $queryTampilProfil = mysqli_query($conn, "SELECT alamat_toko, nomor_telpon_toko, email_toko FROM tb_profil_toko");
                $countRecordProfil = mysqli_num_rows($queryTampilProfil);
                if ($countRecordProfil > 0) {
                    while ($dataProfil = mysqli_fetch_array($queryTampilProfil)) { ?>
                     <div class="col-md-6 col-lg-3">
                         <div class="block-5 mb-5">
                             <h3 class="footer-heading mb-4">Contact Info</h3>
                             <ul class="list-unstyled">
                                 <li class="address"><?= $dataProfil['alamat_toko']; ?></li>
                                 <li class="phone"><?= $dataProfil['nomor_telpon_toko']; ?></li>
                                 <li class="email"><?= $dataProfil['email_toko']; ?></li>
                             </ul>
                         </div>
                     </div>
                 <?php
                    }
                } else { ?>
                 <p>Tidak Ada Profil</p>
             <?php
                }
                ?>
         </div>
         <div class="row pt-5 mt-5 text-center">
             <div class="col-md-12">
                 <p>
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                     <script>
                         document.write(new Date().getFullYear());
                     </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                 </p>
             </div>

         </div>
     </div>
 </footer>
 </div>

 <script src="../../vendor/js/jquery-3.3.1.min.js"></script>
 <script src="../../vendor/js/jquery-ui.js"></script>
 <script src="../../vendor/js/popper.min.js"></script>
 <script src="../../vendor/js/bootstrap.min.js"></script>
 <script src="../../vendor/js/owl.carousel.min.js"></script>
 <script src="../../vendor/js/jquery.magnific-popup.min.js"></script>
 <script src="../../vendor/js/aos.js"></script>

 <script src="../../vendor/js/main.js"></script>

 </body>

 </html>