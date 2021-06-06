<?php
include('../koneksi.php');
$sql = "SELECT * FROM data_penduduk";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id_penduduk' => $row['id_penduduk'],
            'nik' => $row['nik'],
            'no_kk' => $row['no_kk'],
            'nama_penduduk' => $row['nama_penduduk'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'alamat_penduduk' => $row['alamat_penduduk'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);