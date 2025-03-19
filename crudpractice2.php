
<?php
$conn = mysqli_connect('localhost','root','','momin');

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email    = $_POST['email'];
    
    $sql = "INSERT INTO sector1 (firstname,lastname,email)
            VALUES ('$firstname', '$lastname', '$email')";

            if(mysqli_query($conn, $sql) == TRUE){
                echo "data inserted";
                header ('location:crudpractice1.php');
            }else{
                echo "not inserted";
            }
    }
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6 pt-4 mt-4">
                        <h3>registraion from </h3>
                        <form action="crudpractice2.php"method="POST">
                        firstname : <br>
                        <input type="text" name="firstname"><br><br>
                        lastname : <br>
                        <input type="text" name="lastname"><br><br>
                        email : <br>
                        <input type="email" name="email"><br><br>
                        <input type="submit" value="submit" name="submit" class="btn btn-success">

                        </form>
                    </div>
                </div>
            </div>     
    </body>
</html>

