<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

$coon = new mysqli($hostname, $username, $password);

    if($coon->connect_error){
        echo $coon->connect_error;
    }else{
        echo "connected";
    }
$coon->close();