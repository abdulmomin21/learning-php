<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($hostname, $username, $password);

if($conn->connect_error){
    echo $conn->connect_error;

}else{
    echo "connected!";
}
$sql = "CREATE DATABASE phpmydb";
if($conn->query($sql) == TRUE){
    echo "DB created. ";
}else{
    echo $conn->error;
}

$conn->close();
?>