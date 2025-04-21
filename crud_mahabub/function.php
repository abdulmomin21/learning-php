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
    $gender = $_POST["gender"];

    $query = "INSERT INTO users VALUES('', '$name', '$email', '$gender')";
    mysqli_query($conn, $query);
    echo "inserted successfully";
    
}

function edit(){
    global $conn;

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    $query = "UPDATE project SET name = '$name', email = '$email', WHERE id = $id";
    mysqli_query($conn, $query);
    echo "Updated Successed";

}

function delete(){
    global $conn;

    $id = $_POST["action"];

    $query = "DELETE FROM project WHERE id = $id";
    mysqli_query($conn, $query);
    echo "Deleted Successed";
}
?>