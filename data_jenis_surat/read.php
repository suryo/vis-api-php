<?php
include('../koneksi.php');
$sql = "SELECT * FROM data_jenis_surat";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id_jenis_surat' => $row['id_jenis_surat'],
            'id_surat_master' => $row['id_surat_master'],
            'id_surat_masuk' => $row['id_surat_masuk'],
            'id_surat_keluar' => $row['id_surat_keluar'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);