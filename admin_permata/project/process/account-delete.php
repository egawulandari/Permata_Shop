<?php
include_once "../config/config.php";
if (isset($_GET['id_pengguna'])) {

    //cek pelanggan
    $cek = mysqli_query($conn, "SELECT l.id_pengguna, p.id_pengguna FROM tb_pengguna l INNER JOIN tb_pelanggan p ON l.id_pengguna=p.id_pengguna");
    $countCek = mysqli_num_rows($cek);
    if ($countCek > 0) {
        $queryHapus2 = "DELETE FROM tb_pelanggan WHERE id_pengguna='" . $_GET['id_pengguna'] . "'";
        $varQueryHapus2 = mysqli_query($conn, $queryHapus2);

        if ($varQueryHapus2) {
            $queryHapus = "DELETE FROM tb_pengguna WHERE id_pengguna='" . $_GET['id_pengguna'] . "'";
            $varQueryHapus = mysqli_query($conn, $queryHapus);

            if ($varQueryHapus) {
                echo '<script>alert("Pelanggan Berhasil Dihapus");window.location.href="../views/account.php";</script>';
            } else {
                echo '<script>alert("Pelanggan Gagal Dihapus");window.location.href="../views/account.php";</script>';
            }
        } else {
            echo '<script>alert("Pelanggan Gagal Dihapus");window.location.href="../views/account.php";</script>';
        }
    } else {
        $queryHapusPengguna = "DELETE FROM tb_pengguna WHERE id_pengguna='" . $_GET['id_pengguna'] . "'";
        $varQueryHapusPengguna = mysqli_query($conn, $queryHapusPengguna);

        if ($varQueryHapusPengguna) {
            echo '<script>alert("Pengguna Berhasil Dihapus");window.location.href="../views/account.php";</script>';
        } else {
            echo '<script>alert("Pengguna Gagal Dihapus");window.location.href="../views/account.php";</script>';
        }
    }
}
