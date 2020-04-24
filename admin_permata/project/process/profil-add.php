<?php
include_once "../config/config.php";

if (isset($_POST['tambah'])) {
    $allowed_ext = array('jpg', 'png');
    $file_name = $_FILES['gambar_toko']['name'];
    $file_x = explode('.', $file_name);
    $file_ext = strtolower(end($file_x));
    $file_tmp = $_FILES['gambar_toko']['tmp_name'];
    $file_size = $_FILES['gambar_toko']['size'];
    $desc = htmlspecialchars($_POST['desc_toko']);
    $alamat = htmlspecialchars($_POST['alamat_toko']);
    $kontak = htmlspecialchars($_POST['kontak']);
    $email = htmlspecialchars($_POST['email']);

    //cek record
    $queryCountRec = mysqli_query($conn, "SELECT id_profil_toko FROM tb_profil_toko");
    $Count = mysqli_num_rows($queryCountRec);
    if ($Count < 1) {
        //cek ekstensi
        if (in_array($file_ext, $allowed_ext) === true) {
            //cek ukuran
            if ($file_size < 1044070) {
                //upload file
                $lokasi = '../../../image/profil/' . $file_name;
                $moved = move_uploaded_file($file_tmp, $lokasi);
                $varTambah =  "INSERT INTO tb_profil_toko (foto_toko, deskripsi_toko, alamat_toko, nomor_telpon_toko, email_toko) 
            VALUES ('" . $file_name . "','" . $desc . "','" . $alamat . "','" . $kontak . "','" . $email . "')";
                // echo $varTambah;
                // exit();
                $queryTambah = mysqli_query($conn, $varTambah);
                if ($queryTambah) {
                    echo '<script>alert("Profil Baru Berhasil Ditambahkan");window.location.href="../views/profil.php";</script>';
                } else {
                    echo '<script>alert("Profil Gagal Ditambahkan");window.location.href="../views/profil.php";</script>';
                }
            } else {
                echo '<script>alert("File Terlalu Besar! Max 1Mb");window.location.href="../views/info.php";</script>';
            }
        } else {
            echo '<script>alert("Ekstensi File Tidak Diperbolehkan");window.location.href="../views/info.php";</script>';
        }
    } else {
        echo '<script>alert("Data Profil Sudah Ada");window.location.href="../views/profil.php";</script>';
    }
}
