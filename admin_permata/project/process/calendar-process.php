<?php
require_once "../config/config.php";
$data = array();

$querydata = "SELECT judul_info, tgl_info, tgl_akhir, status_info FROM tb_promosi";
$resultdata = mysqli_query($conn, $querydata);
while ($data2 = mysqli_fetch_assoc($resultdata)) {
    switch ($data2['status_info']) {
        case 'Aktif':
            $data[] = array(
                'title'          => $data2['judul_info'],
                'start'          => $data2['tgl_info'],
                'end'            => $data2['tgl_akhir'],
                'backgroundColor' => '#409FFF', //blue
                'borderColor'    => '#409FFF'
            );
            break;
        case 'Tidak Aktif':
            $data[] = array(
                'title'          => $data2['judul_info'],
                'start'          => $data2['tgl_info'],
                'end'            => $data2['tgl_akhir'],
                'backgroundColor' => '#F00', //red
                'borderColor'    => '#F00'
            );
            break;
    }
}
echo json_encode($data);
