<?php
include_once "../config/config.php";

if (isset($_POST['submit'])) {
    $tgl_daftar = $_POST['tgl_daftar'];
    $username = htmlspecialchars($_POST['username']);
    $gender = $_POST['gender'];
    $email = htmlspecialchars($_POST['email']);
    $hp = htmlspecialchars($_POST['hp']);
    $pass1 = md5($_POST['pass1']);
    $pass2 = md5($_POST['pass2']);

    if ($pass1 != $pass2) {
        echo "<script>alert('Akun Gagal Ditambahkan! Password Tidak Cocok!');window.location.href='../views/login.php';</script>";
    } else {

        $varAddUser = "INSERT INTO tb_pengguna(id_level, tgl_daftar, username, status_login, password, jenis_kelamin, email, no_hp, status_akun) VALUES 
        (3, '" . $tgl_daftar . "', '" . $username . "', 'Offline', '" . $pass1 . "', '" . $gender . "', '" . $email . "', '" . $hp . "', 'Proses')";

        $varQuery = mysqli_query($conn, $varAddUser);

        if ($varQuery) {
            //ambil id
            $queryMax = mysqli_query($conn, "SELECT MAX(id_pengguna) AS x FROM tb_pengguna");
            while ($data = mysqli_fetch_array($queryMax)) {
                $id = $data['x'];

                $insertPelanggan = mysqli_query($conn, "INSERT INTO tb_pelanggan(id_pengguna) VALUES ('" . $id . "')");
                if ($insertPelanggan) {
                    echo "<script>alert('Akun Berhasil Ditambahkan!');window.location.href='../views/login.php';</script>";
                } else {
                    echo "<script>alert('Akun Gagal Ditambahkan!');window.location.href='../views/register.php';</script>";
                }
            }
        } else {
            echo "<script>alert('Akun Gagal Ditambahkan!');window.location.href='../views/register.php';</script>";
        }
    }
}
