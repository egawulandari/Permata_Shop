<?php
include_once "../config/config.php";
include_once "header.php";
?>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <img src="../../../image/icon/diamond.png" alt="AdminLTE Logo" width="50"><b>Admin</b>PERMATA
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Daftar Akun Baru</p>

                <form action="../process/register-process.php" method="post">
                    <input type="hidden" name="tgl_daftar" class="form-control" id="tgl_daftar" required="" value="<?= date("Y-m-d"); ?>">
                    <div class="input-group mb-3">
                        <input type="text" name="username" id="username" class="form-control" minlength="5" maxlength="50" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select name="gender" class="form-control custom-select" required>
                            <option selected disabled>Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" id="email" minlength="15" maxlength="50" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel" pattern="^\d{10,13}$" class="form-control" name="hp" id="hp" placeholder="Nomor Handphone" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="pass1" maxlength="30" minlength="8" id="pass1" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="pass2" maxlength="30" minlength="8" id="pass2" placeholder="Ulangi password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <a href="login.php" class="text-center">Sudah Punya Akun?</a>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <?php
    include_once "footer.php";
    ?>