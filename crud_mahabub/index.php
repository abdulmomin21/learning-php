
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
    <table class='table table-success'>
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        <?php 
        require 'connection.php';
        $rows = mysqli_query($conn, "SELECT *FROM project");
        ?>
        <?php foreach($rows as $row) : ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>

            <td>
                <span class='btn btn-success'>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class='text-white text-decoration-none'>Edit</a>
                </span>
                <span class='btn btn-danger'>
                    <button type="button" onclick="submitData(<?php echo $row['id']; ?> );" class='text-white text-decoration-none'>Delete</button>
                        delete</a>
                        </span>
            </td>
        </tr>
            <?php endforeach; ?>
    </table><br>
        <a href="add.php">Add User</a>
        <?php require 'jsscript.php'; ?>
                    </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </body>
</html>