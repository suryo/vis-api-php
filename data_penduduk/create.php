<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$id_penduduk = $data['id_penduduk'];
$nik = $data['nik'];
$no_kk = $data['no_kk'];
$nama_penduduk = $data['nama_penduduk'];
$jenis_kelamin = $data['jenis_kelamin'];
$alamat_penduduk = $data['alamat_penduduk'];

if (!mysqli_query($conn, "INSERT into user (id_penduduk, nik, no_kk, nama_penduduk, jenis_kelamin, alamat_penduduk) 
                                    values ('$id_penduduk', '$nik', '$no_kk', '$nama_penduduk', '$jenis_kelamin', '$alamat_penduduk')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);