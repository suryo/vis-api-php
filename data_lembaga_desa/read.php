<?php
include('../koneksi.php');
$sql = "SELECT * FROM data_lembaga_desa";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id_lembaga' => $row['id_lembaga'],
            'nama_lembaga' => $row['nama_lembaga'],
            'jenis_lembaga' => $row['jenis_lembaga'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);