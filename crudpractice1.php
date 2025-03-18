<?php

    $conn = mysqli_connect('localhost', 'root', '', 'momin');

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];

$sql = "INSERT INTO sector1 (firstname, lastname, email)
        VALUES ('$firstname', '$lastname','$email')";

        if(mysqli_query($conn, $sql) == TRUE){
            echo "data inserted";
            header ('location:crudpractice1.php');
        }else{
            echo "not inserted";
        }
    }
?>

<form action="crudpractice1.php" method="POST">
    firstname : <br>
    <input type="text" name="firstname"><br><br>
    lastname : <br>
     <input type="text" name="lastname"><br><br>
     email : <br>
     <input type="email" name= "email"><br><br>
     <input type="submit" value= "submit" name="submit">
</form>