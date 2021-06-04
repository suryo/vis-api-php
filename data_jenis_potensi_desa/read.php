<?php
include('../koneksi.php');
$sql = "SELECT * FROM data_jenis_potensi_desa";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id_jenis_potensi' => $row['id_jenis_potensi'],
            'nama_potensi' => $row['nama_potensi'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);