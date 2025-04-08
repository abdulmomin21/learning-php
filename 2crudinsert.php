<?php
    $conn = mysqli_connect('localhost','root','','intu');

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email     = $_POST['email'];

        $sql = "INSERT INTO momin(firstname,lastname,email)
                VALUES ('$firstname', '$lastname', '$email')";
        
        if(mysqli_query($conn, $sql) ==true){
            echo "data inserted";
        }else{
            echo "not insert";
        }

    }
?>
<form action="2crudinsert.php" method="POST">
    firstname : <br>
    <input type="text" name="firstname"><br><br>
    lastname : <br>
    <input type="text" name ="lastname"><br><br>
    email : <br>
    <input type="email" name ="email"><br><br>
    <input type="submit" value="submit" name="submit">


</form>