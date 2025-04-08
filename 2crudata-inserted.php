<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'momin';

$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_error){
    echo $conn->connect_error;
}

$sql = "INSERT INTO sector1 (firstname, lastname, email)
        VALUES ('abdul', 'momin', 'momin77@gmail.com')";

    if($conn->query($sql) == TRUE){
        echo "created";
    }else {
        echo $conn->error;
    }
    $conn->close();
?>