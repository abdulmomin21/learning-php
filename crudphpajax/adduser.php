<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>
</head>
<body>
    <h2>add user</h2>
    <form autocomplete="off" action="" method="post">
        <label for="">name</label>
        <input type="text" id="name" value=""><br>
        <label for="">email</label>
        <input type="text" id="email" value=""><br>
        <label for="">gender</label>
        <select class="" id="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select><br>
        <button type="button" onclick="submitData('insert');">insert</button>
    </form>
    <br>
    <a href="index.php">go to index</a>
    <?php require 'script.php'; ?>
</body>
</html>
