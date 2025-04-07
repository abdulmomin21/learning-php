<?php
$hostname = 'localhost';
$username = ' root';
$password = '';

$coon = new myslqli($hostname, $username, $password);

    if($conn->connect_error){
        echo $coon->connect_error;
    }
$sql = "CREATE DATABASE imon";

if($coon->query($sql)== TRUE){
    echo "imon created";
    
}
$coon->close(); 
?>