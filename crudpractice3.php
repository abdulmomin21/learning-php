<?php

    $conn = mysqli_connect('localhost', 'root', '', 'momin');
    if(isset($_GET['deleteid'])){
        $deleteid = $_GET['deleteid'];

        $sql = "DELETE FROM sector1 WHERE id = $deleteid";

        if(mysqli_query($conn, $sql) == TRUE){
            header('location:crudpractice3.php');
        }
    };

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];

$sql = "INSERT INTO sector1 (firstname, lastname, email)
        VALUES ('$firstname', '$lastname','$email')";

        if(mysqli_query($conn, $sql) == TRUE){
            echo "data inserted";
            header ('location:crudpractice3.php');
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
            <div class ="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 pt-4 mt-4 border border-success">
                    <h3>registration form</h3>
                <form action="crudpractice3.php" method="POST">
                    firstname : <br>
                    <input type="text" name="firstname"><br><br>
                    lastname : <br>
                    <input type="text" name="lastname"><br><br>
                    email : <br>
                    <input type="email" name= "email"><br><br>
                    <input type="submit" value= "submit" name="submit" class="btn btn-success">
                </form>

                </div>
            </div>
        </div>
        


    
    
        <div class="container">
            <div class ="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 pt-4 mt-4 border border-success">
                    <h3 class="text-center p-2 m-2 bg-success text-white">usser information</h3>
                   <?php
                   $sql = "SELECT * FROM sector1";
                   $query = mysqli_query($conn, $sql);

                  echo "<table class='table table-success'>
                            <tr>
                            <th>id</th>
                            <th>firstname</th>
                            <th>lastname</th>
                            <th>email</th>
                            <th>action </th>
                            </tr>";
                  while( $data = mysqli_fetch_assoc($query)){
                
                   $id = $data['id'];
                   $firstname = $data['firstname'];
                   $lastname  = $data['lastname'];
                   $email = $data['email'];

                   echo "<tr>
                   <td>$id</td>
                   <td>$firstname</td>
                   <td>$lastname</td>
                   <td>$email</td>
                   <td>
                        <span class='btn btn-success'>
                           <a href='crudpractice3.php?id=$id' class='text-white text-decoration-none'> edit </a>
                        </span>
                        <span class='btn btn-danger'>
                            <a href='crudpractice3.php?deleteid=$id' class='text-white text-decoration-none'>
                            delete
                            </a>
                        </span>
                    </td>
                   </tr>" ;

                  /* echo $id.' '.$firstname.' '.$lastname.' '.$email, "<br>"; */
                  }
                   ?>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
   



    </body>
</html>


