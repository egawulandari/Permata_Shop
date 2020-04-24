<?php
include_once "../config/config.php";

if (isset($_POST['tambah'])) {
    $judul = htmlspecialchars($_POST['judul_info']);
    $deadline = $_POST['tgl_akhir'];
    $allowed_ext = array('jpg', 'png');
    $file_name = $_FILES['gambar_info']['name'];
    $file_x = explode('.', $file_name);
    $file_ext = strtolower(end($file_x));
    $file_tmp = $_FILES['gambar_info']['tmp_name'];
    $file_size = $_FILES['gambar_info']['size'];
    $tanggal = $_POST['tanggal_info'];
    $desc = htmlspecialchars($_POST['desc_info']);

    //cek deadline
    if ($deadline < $tanggal) {
        echo '<script>alert("Tanggal Akhir Sudah Lewat");window.location.href="../views/info.php";</script>';
    } else {

        //cek ekstensi
        if (in_array($file_ext, $allowed_ext) === true) {
            //cek ukuran
            if ($file_size < 1044070) {
                //upload file
                $lokasi = '../../../image/info/' . $file_name;
                $moved = move_uploaded_file($file_tmp, $lokasi);
                $varTambah =  "INSERT INTO tb_promosi (judul_info, gambar_info, tgl_info, deskripsi_info, status_info) 
            VALUES ('" . $judul . "','" . $file_name . "','" . $tanggal . "','" . $desc . "','Aktif')";
                // echo $varTambah;
                // exit();
                $queryTambah = mysqli_query($conn, $varTambah);
                if ($queryTambah) {
                    echo '<script>alert("Info Promosi Baru Berhasil Ditambahkan");window.location.href="../views/info.php";</script>';
                } else {
                    echo '<script>alert("Info Promosi Gagal Ditambahkan");window.location.href="../views/info.php";</script>';
                }
            } else {
                echo '<script>alert("File Terlalu Besar! Max 1Mb");window.location.href="../views/info.php";</script>';
            }
        } else {
            echo '<script>alert("Ekstensi File Tidak Diperbolehkan");window.location.href="../views/info.php";</script>';
        }
    }
}
