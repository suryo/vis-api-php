<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$nama_potensi = $data['nama_potensi'];

if (!mysqli_query($conn, "INSERT into user (nama_potensi) values ('$nama_potensi')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);