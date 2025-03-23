<?php

    $conn = mysqli_connect('localhost', 'root', '', 'momin');
    if($_GET['id']){
        $getid = $_GET['id'];

        $sql = "SELECT * FROM sector1 WHERE id = $getid";

        $query = mysqli_query($conn, $sql);
        
        $data = mysqli_fetch_assoc($query);

        $id        = $data['id'];
        $firstname = $data['firstname'];
        $lastname  = $data['lastname'];
        $email     = $data['email'];
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
                    <input type="text" name="firstname" value="<?php echo $firstname ?>"><br><br>
                    lastname : <br>
                    <input type="text" name="lastname" value="<?php echo $lastname ?>"><br><br>
                    email : <br>
                    <input type="email" name= "email" value= "<?php echo $email ?>"><br><br>
                    
                    <input type="text" name="id" value="<?php echo $id ?>" hidden>
                    <input type="submit" value= "submit" name="submit" class="btn btn-success">
                </form>

                </div>
            </div>
        </div>
    </body>
</html>

