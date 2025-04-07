<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli ($hostname, $username, $password);
 
if($conn->connect_error){
    echo $coon->connect_error;
}

$sql = "CREATE DATABASE intu";
if($conn->query($sql)== true){
    echo "intu created";
}else{
    echo $conn->error;
}

$conn->close();
?>