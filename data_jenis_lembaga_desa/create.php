<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$nama_lembaga = $data['nama_lembaga'];

if (!mysqli_query($conn, "INSERT into user (nama_lembaga) values ('$nama_lembaga')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);