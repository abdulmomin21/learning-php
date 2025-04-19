<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container">
            <div class ="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 pt-4 mt-4 border border-success">
                    <h3>add</h3>

            <form autocomplete="off" action="" method="post">
                <label for="">name :</label>
                <input type="text" id="name" value=""><br><br>
                <label for="">email :</label>
                <input type="text" id="email" value=""><br><br>
                <button type="button" onclick="submitData('insert');" class="btn btn-success">insert data</button>
            </form><br>
            <a href="index.php">go to index</a>
            <?php require 'script.php'; ?>
                </div>
            </div>
        </div>
</body>
</html>
