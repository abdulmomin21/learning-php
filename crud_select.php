<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($hostname, $username, $password);

if($conn->connect_error){
    echo $conn->connect_error;
    $sql = "SELECT * FROM STUDENT";
    $result = $conn->query($sql);
    if ($result->num_rows>0){
        $row = $result->fetch_assoc();
        print_r($row);

    }else{echo $conn->error;}

    $conn->close();
    ?>