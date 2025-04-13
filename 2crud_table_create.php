<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'intu';

$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_error){
    echo $conn->connect_error;
}
$sql = "CREATE TABLE momin (
id int(6) AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(50),
lastname VARCHAR (50),
email VARCHAR(30))";

if($conn->query($sql)== TRUE){
    echo "created";
}else{
    echo $conn->error;
}
$conn->close();
?>