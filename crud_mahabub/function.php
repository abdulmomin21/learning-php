<?php 
require 'connection.php';


if(isset($_POST["action"])){
    if($_POST["action"] == "insert"){
        echo "insert function";
        insert();
    }
    else if($_POST["action"] == "edit"){
        edit();
    }else {
        delete();
    }
}

function insert(){
    global $conn;

    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];

    $query = "INSERT INTO crud VALUES('', '$name', '$email', '$number', '$password')";
    mysqli_query($conn, $query);
    echo "inserted successfully";
    
}


function edit(){
    global $conn;

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];

    $query = "UPDATE crud SET name = '$name', email = '$email', number = '$number', password = '$password' WHERE id = $id";
    mysqli_query($conn, $query);
    echo "Updated Successfully";

}
function delete(){
    global $conn;

    $id = $_POST["id"];

    $query = "DELETE FROM crud WHERE id = $id";
    mysqli_query($conn, $query);
    echo "Deleted Successfully";
}
?>