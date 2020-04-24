<?php
include_once "../config/config.php";

if (isset($_POST['tambah'])) {
    $nama = htmlspecialchars($_POST['nama_layanan']);
    $allowed_ext = array('jpg', 'png');
    $file_name = $_FILES['foto_layanan']['name'];
    $file_x = explode('.', $file_name);
    $file_ext = strtolower(end($file_x));
    $file_tmp = $_FILES['foto_layanan']['tmp_name'];
    $file_size = $_FILES['foto_layanan']['size'];
    $desc = htmlspecialchars($_POST['desc_layanan']);
    $harga = $_POST['harga'];

    //cek ekstensi
    if (in_array($file_ext, $allowed_ext) === true) {
        //cek ukuran
        if ($file_size < 1044070) {
            //upload file
            $lokasi = '../../../image/layanan/' . $file_name;
            $moved = move_uploaded_file($file_tmp, $lokasi);
            $varTambah =  "INSERT INTO tb_layanan (nama_layanan, foto_layanan, deskripsi_layanan, harga_layanan, status_layanan) 
            VALUES ('" . $nama . "','" . $file_name . "','" . $desc . "','" . $harga . "','Tersedia')";
            // echo $varTambah;
            // exit();
            $queryTambah = mysqli_query($conn, $varTambah);
            if ($queryTambah) {
                echo '<script>alert("Layanan Baru Berhasil Ditambahkan");window.location.href="../views/catalog.php";</script>';
            } else {
                echo '<script>alert("Layanan Gagal Ditambahkan");window.location.href="../views/catalog.php";</script>';
            }
        } else {
            echo '<script>alert("File Terlalu Besar! Max 1Mb");window.location.href="../views/catalog.php";</script>';
        }
    } else {
        echo '<script>alert("Ekstensi File Tidak Diperbolehkan");window.location.href="../views/catalog.php";</script>';
    }
}
