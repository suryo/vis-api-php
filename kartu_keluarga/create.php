<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$nik = $data['nik'];


if (!mysqli_query($conn, "INSERT into data_kartu_keluarga (nik) values ('$nik')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);