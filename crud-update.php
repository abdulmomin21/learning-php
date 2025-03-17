<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'momin';

$conn = new mysqli($hostname, $username, $password, $dbname);
if($conn->connect_error){
    echo $conn->connect_error;
}
$sql = "UPDATE sector1 SET firstname='imran', lastname='hosain',
        email='intu@gmail.com' WHERE id=3 ";
    if($conn->query($sql) == TRUE){
        echo "created";
    }else{
        $conn->error;
    }
    $conn->close();

?>