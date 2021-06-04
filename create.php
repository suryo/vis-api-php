<?php
include('koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$nama_user = $data['nama_user'];
$email_user = $data['email_user'];
$alamat_user = $data['alamat_user'];


if (!mysqli_query($conn, "INSERT into user (nama_user, email_user, alamat_user) values ('$nama_user', '$email_user', '$alamat_user')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);