<?php
include_once "../config/config.php";

if (isset($_POST['edit'])) {
    $id_layanan = $_POST['id_layanan'];
    $nama = htmlspecialchars($_POST['nama_layanan']);
    $desc = htmlspecialchars($_POST['desc_layanan']);
    $harga = htmlspecialchars($_POST['harga']);
    $status = $_POST['status_lay'];

    $query = mysqli_query($conn, "UPDATE tb_layanan SET nama_layanan = '" . $nama . "', deskripsi_layanan = '" . $desc . "', harga_layanan = '" . $harga . "', status_layanan = '" . $status . "' WHERE id_layanan = '" . $id_layanan . "'");
    if ($query) {
        echo '<script>alert("Layanan Berhasil Diedit");window.location.href="../views/catalog.php";</script>';
    } else {
        echo '<script>alert("Layanan Gagal Diedit");window.location.href="../views/catalog.php";</script>';
    }
}
