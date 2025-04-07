<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'intu';

$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_error){
    echo $conn->connect_error;
}

$sql = "CREATE TABLE studrnt (
        id int(6) AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(40),
        lastname VARCHAR(40),
        email VARCHAR(25))";

if($conn->query($sql) == TRUE){
    echo "table created";
}else{
    echo $conn->error;
}
$conn->close();
?>