<?php
include('../koneksi.php');
$sql = "SELECT * FROM data_surat_masuk";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id_surat_masuk' => $row['id_surat_masuk'],
            'id_jenis_surat' => $row['id_jenis_surat'],
            'tgl_masuk' => $row['tgl_masuk'],
            'perihal' => $row['perihal'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);