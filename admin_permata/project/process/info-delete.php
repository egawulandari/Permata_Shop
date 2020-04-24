<?php
include_once "../config/config.php";
if (isset($_GET['id_info'])) {
    $queryHapus = "DELETE FROM tb_promosi WHERE id_info='" . $_GET['id_info'] . "'";
    $varQueryHapus = mysqli_query($conn, $queryHapus);

    if ($varQueryHapus) {
        echo '<script>alert("Info Promosi Berhasil Dihapus");window.location.href="../views/info.php";</script>';
    } else {
        echo '<script>alert("Info Promosi Gagal Dihapus");window.location.href="../views/info.php";</script>';
    }
}
