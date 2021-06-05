<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$id_data = $data['id_data'];
$no_kk = $data['no_kk'];
$nik = $data['nik'];

if (!mysqli_query($conn, "INSERT into user (id_data, no_kk, nik) 
                                    values ('$id_data', '$no_kk', '$nik')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);