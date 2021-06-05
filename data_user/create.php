<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$id_user = $data['id_user'];
$username = $data['username'];
$password = $data['password'];
$nik = $data['nik'];

if (!mysqli_query($conn, "INSERT into user (id_user, username, password, nik) 
                                    values ('$id_user', '$username', '$password', '$nik')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);