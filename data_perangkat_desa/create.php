<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$id_perangkat_desa = $data['id_perangkat_desa'];
$nama_perangkat_desa = $data['nama_perangkat_desa'];
$jabatan = $data['jabatan'];

if (!mysqli_query($conn, "INSERT into user (id_perangkat_desa, nama_perangkat_desa, jabatan) 
                                    values ('$id_perangkat_desa', '$nama_perangkat_desa', '$jabatan')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);