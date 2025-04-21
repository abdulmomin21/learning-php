<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit </title>
</head>
<body>
    <h2>edit </h2>
    <form autocomplete="off" action="" method="post">
        <?php
        require 'connection.php';
        $id = $_GET["id"];
        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM project WHERE id = $id"));
        ?>
        <input type="hidden" id = "id" value="<?php echo $rows['id']; ?>">
        <label for="">name</label>
        <input type="text" id="name" value="<?php echo $rows['name']; ?>"><br>
        <label for="">email</label>
        <input type="text" id="email" value="<?php echo $rows['email']; ?>"><br>
        <button type="button" onclick="submitData('edit');">Edit</button>
    </form>
    <br>
    <a href="index.php">go to index</a>
    <?php require 'jsscript.php'; ?>
</body>
</html>
