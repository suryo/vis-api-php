<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$id_lembaga = $data['id_lembaga'];
$nama_lembaga = $data['nama_lembaga'];
$jenis_lembaga = $data['jenis_lembaga'];

if (!mysqli_query($conn, "INSERT into user (id_lembaga, nama_lembaga, jenis_lembaga) 
                                    values ('$id_lembaga', '$nama_lembaga', '$jenis_lembaga')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);