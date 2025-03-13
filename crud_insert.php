<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($hostname, $username, $password);
if($conn->connect_error){
    echo $conn->connect_error;
}

$sql = "INSERT INTO student (firstname, lastname, email)
    VALUES ('abdul', 'momin', 'momin77@gmail.com')";

    if($conn->query($sql) == TRUE){
        echo "data inserted";

    }else{
        echo $conn->error;
    }
$conn->close();
?>