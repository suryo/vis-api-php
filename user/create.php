<?php
include('../koneksi.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$id = $data['id'];
$email = $data['email'];
$roles = $data['roles'];
$password = $data['password'];

if (!mysqli_query($conn, "INSERT into user (id, email, roles, password) 
                                    values ('$id', '$email', '$roles', '$password')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);