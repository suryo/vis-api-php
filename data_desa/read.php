<?php
include('../koneksi.php');
$sql = "SELECT * FROM data_desa";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id_desa' => $row['id_desa'],
            'nama_desa' => $row['nama_desa'],
            'alamat_lengkap' => $row['alamat_lengkap'],
            'deskripsi' => $row['deskripsi'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);