<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
        <div class="container">
            <div class ="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4  pt-4 mt-4 border border-success bg-success">
                    <h3 class="text-center bg-success text-white">edit data</h3>
                    <form autocomplete="off" action="" method="post" class="text-center">
                        <?php
                        require 'connection.php';
                        $id = $_GET["id"];
                        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM crud WHERE id = $id"));
                        ?>
                        <input type="hidden" id = "id" value="<?php echo $rows['id']; ?>">
                
                        <input type="text" id="name" placeholder="name :" value="<?php echo $rows['name']; ?>"><br>
                    
                        <input type="email" id="email" placeholder="email :" value="<?php echo $rows['email']; ?>"><br>
                      
                        <input type="number" id="number" placeholder="number :" value="<?php echo $rows['number']; ?>"><br>
                       
                        <input type="password" id="password" placeholder="password :" value="<?php echo $rows['password']; ?>"><br>
                        
                        <button type="button" onclick="submitData('edit');" class="mt-4 btn btn-success">Edit</button><br>

                        <a href="index.php" class="text-right">go to index</a>
                    </form>
                    </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    <br>
    <a href="index.php">go to index</a>
    <?php require 'jsscript.php'; ?>
</body>
</html>
