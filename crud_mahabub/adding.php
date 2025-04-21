<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
            <div class ="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4  pt-4 mt-4 border border-success">
                    <h3 class="text-center bg-success text-white">add data</h3>
                    <form autocomplete="off" action="" method="post" class='text-center bg-success'>
        
                        <input type="text" id="name" placeholder="name" value=""><br>
                    
                        <input type="text" id="email" placeholder="email" value=""><br>
                       
                        <input type="number" id="number" placeholder="number" value=""><br>
                     
                        <input type="password" id="password" placeholder="password" value=""><br>
                        <button type="button" onclick="submitData('insert');">insert</button>
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
