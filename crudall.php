<?php

$conn = mysqli_connect('localhost', 'root', '', 'momin');

if (isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM sector1 WHERE id = $deleteid";
    if (mysqli_query($conn, $sql) == TRUE) {
        header('location:crudall.php');
    }
}

if (isset($_GET['editid'])) {
    $editid = $_GET['editid'];
    $sql = mysqli_query($conn, "SELECT * FROM `sector1` WHERE `id` = '$editid'");
    $row = mysqli_fetch_assoc($sql);

    if (!$row) {
        header('location:crudall.php');
        exit;
    }
}

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];
    $image     = $_FILES['image']['name'];

    // Check if any field is blank
    if (empty($firstname) || empty($lastname) || empty($email) || empty($image)) {
        echo "All fields are required! Please fill in all fields.";
    } else {

        // Check if the email already exists in the database
        $emailcheck = mysqli_query($conn, "SELECT * FROM `sector1` WHERE email = '$email'");
        
        if (mysqli_num_rows($emailcheck) > 0) {
            echo "Email already exists! Please choose a different email.";
        } else {
            // Proceed with inserting the new record if email is unique
            $imagename = $_FILES['image']['name'];
            $tmpname   = $_FILES['image']['tmp_name'];
            $uploc     = 'images/' . $imagename;

            // Insert data into the database
            $sql = "INSERT INTO sector1(firstname,lastname,email,image)
                    VALUES ('$firstname','$lastname','$email','$imagename')";

            if (mysqli_query($conn, $sql) == TRUE) {
                move_uploaded_file($tmpname, $uploc);
                header('location:crudall.php');
            } else {
                echo "Data not inserted!";
            }
        }
    }
}
?>


<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .img {
            width: 100px;
            height: auto
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 pt-4 mt-4 border border-success">
                <div>
                    <h3>registration form</h3>

                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                        firstname : <br>
                        <input type="text" name="firstname"value="<?php echo isset($row['firstname']) ? $row['firstname'] : ''; ?>"><br><br>
                        lastname : <br><br>
                        <input type="text" name="lastname"value="<?php echo isset($row['firstname']) ? $row['lastname'] : ''; ?>"><br><br>
                        eamil : <br>
                        <input type="email" name="email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>"><br><br>
                        picture : <br>
                        <input type="file" name="image" class="img" value="<?php echo isset($row['image']) ? $row['image'] : ''; ?>"><br><br>
                        <input type="submit" value="submit" name="submit" class="btn btn-success">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-12 pt-4 mt-4 border border-success">
                <h3 class="text-center p-2 m-2 bg-success text-white">usser information</h3>
                <?php

                $sql = "SELECT * FROM sector1 ORDER BY id DESC";

                $query = mysqli_query($conn, $sql);




                echo "<table class='table table-success'>
         <tr>
         <th>id</th>
         <th>firstname</th>
         <th>lastname</th>
         <th>email</th>
         <th>image</th>
         <th>action</th>
         </tr>";

                while ($data  = mysqli_fetch_assoc($query)) {

                    $id        = $data['id'];
                    $firstname = $data['firstname'];
                    $lastname  = $data['lastname'];
                    $email     = $data['email'];
                    $image     = $data['image'];

                    echo "<tr>
        <td>$id</td>
        <td>$firstname</td>
        <td>$lastname</td>
        <td>$email</td>
        <td><img src='images/$image' class='img'></td>
        <td>
        <span class='btn btn-success'>
        <a href='crudall.php?editid=$id' class='text-white text-decoration-none'> edit </a>
        </span>
        <span class='btn btn-danger'>
            <a href='crudall.php?deleteid=$id' class='text-white text-decoration-none'>
             delete
            </a>
        </span>
            </td>
            
        </tr>";
                }

                /* echo $id.' '.$firstname.' '.$lastname.' '.$email, "<br>"; */

                ?>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>


</body>

</html>