<?php
include_once "../config/config.php";
if (isset($_GET['id_layanan'])) {
    $queryHapus = "DELETE FROM tb_layanan WHERE id_layanan='" . $_GET['id_layanan'] . "'";
    $varQueryHapus = mysqli_query($conn, $queryHapus);

    if ($varQueryHapus) {
        echo '<script>alert("Layanan Berhasil Dihapus");window.location.href="../views/catalog.php";</script>';
    } else {
        echo '<script>alert("Layanan Gagal Dihapus");window.location.href="../views/catalog.php";</script>';
    }
}
