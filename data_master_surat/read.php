<?php
include('../koneksi.php');
$sql = "SELECT * FROM data_master_surat";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id_surat' => $row['id_surat'],
            'no_surat' => $row['no_surat'],
            'keterangan_surat' => $row['keterangan_surat'],
            'kepada' => $row['kepada'],
            'alamat' => $row['alamat'],
            'tanggal' => $row['tanggal'],
            'tempat' => $row['tempat'],
            'kepala_desa' => $row['kepala_desa'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);