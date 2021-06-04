<?php
include('koneksi.php');

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id_user' => $row['id_user'],
            'nama_user' => $row['nama_user'],
            'email_user' => $row['email_user'],
            'alamat_user' => $row['alamat_user'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);