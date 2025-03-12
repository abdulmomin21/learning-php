<?php
    $conn= mysqli_connect('localhost', 'root', '','phptestbd')

if(isset($_POST['submit'])){
    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $email      = $_POST['email'];

    $sql = "INSERINTO student(firstname,lastname,email)
            VALUES('$firstname','$lastname','$email')";

        if(mysqli_query($conn, $sql)  ==true){
            echo "data inserted";
        }else{
            echo "notinsert.";
        }
}
?>
<form action="crud.php" method="POST">
    Firstname:<br>
    <input type="text" name="firstname"><br><br>

    Lastname:<br>
    <input type="text" name="lastname"><br><br>

    Email:<br>
    <input type="email" name="email"><br><br>

    <button type="submit">Submit</button>
</form>
