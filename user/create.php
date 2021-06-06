<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$email = $data['email'];
$roles = $data['roles'];
$password = $data['password'];

if (!mysqli_query($conn, "INSERT into user ( email, roles, password) 
                                    values ('$email', '$roles', '$password')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);