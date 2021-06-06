<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$id_surat_master = $data['id_surat_master'];
$id_surat_masuk = $data['id_surat_masuk'];
$id_surat_keluar = $data['id_surat_keluar'];

if (!mysqli_query($conn, "INSERT into user ( id_surat_master, id_surat_masuk, id_surat_keluar) 
                                    values ( '$id_surat_master', '$id_surat_masuk', '$id_surat_keluar')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);