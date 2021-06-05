<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$id_surat = $data['id_surat'];
$no_surat = $data['no_surat'];
$keterangan_surat = $data['keterangan_surat'];
$kepada = $data['kepada'];
$alamat = $data['alamat'];
$tanggal = $data['tanggal'];
$tempat = $data['tempat'];
$kepala_desa = $data['kepala_desa'];

if (!mysqli_query($conn, "INSERT into user (id_surat, no_surat, keterangan_surat, kepada, alamat, tanggal, tempat, kepala_desa) 
                                    values ('$id_surat', '$no_surat', '$keterangan_surat', '$kepada', '$alamat', '$tanggal', '$tempat', '$kepala_desa')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);