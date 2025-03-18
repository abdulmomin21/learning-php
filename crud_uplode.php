<?php
    if(isset($_POST['submit'])){
        echo $_FILES['upfile']['name'];
        echo $_FILES['upfile']['tmp_name'];
    }
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
please select a file <br><br>
<input type="file" name="upfile"><br><br>
<input type="submit" value="upload" name="submit">

</form>