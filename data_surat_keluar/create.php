<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$id_surat_keluar = $data['id_surat_keluar'];
$tgl_keluar = $data['tgl_keluar'];
$perihal = $data['perihal'];

if (!mysqli_query($conn, "INSERT into user ( id_surat_keluar, tgl_keluar, perihal) 
                                    values ( '$id_surat_keluar', '$tgl_keluar', '$perihal')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);