<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($hostname, $username, $password);
if($conn->connect_error){
    echo $conn->connect_error;
}

$sql = "UPDATE student SET firstname='momin', lastname='dev', email='momin@gmail.com' WHERE id=2 ";
 if($conn->query(sql) == TRUE){
    echo "update data";
 }else{
    echo $conn->error;
 }
$conn->close();
?>