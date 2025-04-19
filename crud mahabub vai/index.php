<?php

    $conn = mysqli_connect('localhost', 'root', '', 'mahabub');
   ?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>

    <body>
        <div class="container">
            <div class ="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 pt-4 mt-4 border border-success">
                    <h3 class="text-center p-2 m-2 bg-success text-white">index</h3>
                   <?php
                   $sql = "SELECT * FROM project";
                   $query = mysqli_query($conn, $sql);

                  echo "<table class='table table-success'>
                            <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>action </th>
                            </tr>";
                  while( $data = mysqli_fetch_assoc($query)){
                
                   $id = $data['id'];
                   $name = $data['name'];
                   $email = $data['email'];

                   echo "<tr>
                   <td>$id</td>
                   <td>$name</td>
                   <td>$email</td>
                   <td>
                        <span class='btn btn-success'>
                           <a href='edit.php?id=$id' class='text-white text-decoration-none'> edit </a>
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


