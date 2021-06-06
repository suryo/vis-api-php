<?php
include('../koneksi.php');
$sql = "SELECT * FROM data_perangkat_desa";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id_perangkat_desa' => $row['id_perangkat_desa'],
            'nama_perangkat_desa' => $row['nama_perangkat_desa'],
            'jabatan' => $row['jabatan'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);