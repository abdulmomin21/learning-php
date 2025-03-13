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
    $conn->close();
    /*connection close kore dibe ei function */

?>