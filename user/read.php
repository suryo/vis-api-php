<?php
include('../koneksi.php');
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

$array = array();
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_array($result)) {
        $data = array(
            'id' => $row['id'],
            'email' => $row['email'],
            'roles' => $row['roles'],
            'password' => $row['password'],
        );
        array_push($array, $data);
    }
}

echo json_encode($array);