<?php
include('../koneksi.php');

$sql = "SELECT * FROM data_kartu_keluarga";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'no_kk' => $row['no_kk'],
            'nik' => $row['nik'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);