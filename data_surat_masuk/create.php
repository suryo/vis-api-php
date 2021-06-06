<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$id_jenis_surat = $data['id_jenis_surat'];
$tgl_masuk = $data['tgl_masuk'];
$perihal = $data['perihal'];

if (!mysqli_query($conn, "INSERT into user ( id_jenis_surat, tgl_masuk, perihal) 
                                    values ( '$id_jenis_surat', '$tgl_masuk', '$perihal')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);