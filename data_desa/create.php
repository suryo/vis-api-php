<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$nama_desa = $data['nama_desa'];
$alamat_lengkap = $data['alamat_lengkap'];
$deskripsi = $data['deskripsi'];


if (!mysqli_query($conn, "INSERT into user (nama_desa, alamat_lengkap, deskripsi) values ('$nama_desa', '$alamat_lengkap', '$deskripsi')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);