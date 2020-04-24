<?php
include_once "../config/config.php";

if (isset($_POST['edit-foto'])) {
    $id_layanan = $_POST['id_layanan'];

    $allowed_ext = array('jpg', 'png');
    $file_name = $_FILES['edt_foto_layanan']['name'];
    $file_x = explode('.', $file_name);
    $file_ext = strtolower(end($file_x));
    $file_tmp = $_FILES['edt_foto_layanan']['tmp_name'];
    $file_size = $_FILES['edt_foto_layanan']['size'];


    //cek ekstensi
    if (in_array($file_ext, $allowed_ext) === true) {
        //cek ukuran
        if ($file_size < 1044070) {
            //upload file
            $lokasi = '../../../image/layanan/' . $file_name;
            $moved = move_uploaded_file($file_tmp, $lokasi);
            $var = "UPDATE tb_layanan SET foto_layanan ='" . $file_name . "' WHERE id_layanan = '" . $id_layanan . "'";

            $query = mysqli_query($conn, $var);
            if ($query) {
                echo '<script>alert("Gambar Berhasil Diedit");window.location.href="../views/catalog.php";</script>';
            } else {
                echo '<script>alert("Gambar Gagal Diedit");window.location.href="../views/catalog.php";</script>';
            }
        } else {
            echo '<script>alert("Gambar File Besar! Max 1Mb");window.location.href="../views/catalog.php";</script>';
        }
    } else {
        echo '<script>alert("Ekstensi File Tidak Diperbolehkan");window.location.href=../views/catalog.php";</script>';
    }
}
