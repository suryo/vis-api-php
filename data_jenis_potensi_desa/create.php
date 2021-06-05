<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$id_potensi = $data['id_potensi'];
$nama_potensi = $data['nama_potensi'];



if (!mysqli_query($conn, "INSERT into user (id_potensi, nama_potensi) values ('$id_potensi', '$nama_potensi')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);