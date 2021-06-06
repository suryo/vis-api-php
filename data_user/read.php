<?php
include('../koneksi.php');
$sql = "SELECT * FROM data_user";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id_user' => $row['id_user'],
            'username' => $row['username'],
            'password' => $row['password'],
            'nik' => $row['nik'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);