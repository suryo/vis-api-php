<?php
include('../koneksi.php');
$sql = "SELECT * FROM data_surat_keluar";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'no_id_surat' => $row['no_id_surat'],
            'id_surat_keluar' => $row['id_surat_keluar'],
            'tgl_keluar' => $row['tgl_keluar'],
            'perihal' => $row['perihal'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);