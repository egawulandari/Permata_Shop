<?php
include_once "../config/config.php";
if (isset($_GET['id_profil'])) {
    $queryHapus = "DELETE FROM tb_profil_toko WHERE id_profil_toko='" . $_GET['id_profil'] . "'";
    $varQueryHapus = mysqli_query($conn, $queryHapus);

    if ($varQueryHapus) {
        echo '<script>alert("Profil Toko Berhasil Dihapus");window.location.href="../views/profil.php";</script>';
    } else {
        echo '<script>alert("Profil Toko Gagal Dihapus");window.location.href="../views/profil.php";</script>';
    }
}
