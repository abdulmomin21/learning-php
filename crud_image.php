<?php
    
    $conn = mysqli_connect('localhost','root','','momin');

    if(isset($_POST['submit'])){
      $firstname = $_POST['firstname'];
      $lastname  = $_POST['lastname'];
      $email     = $_POST['email'];

      $imagename = $_FILES['image']['name'];
      $tmpname   = $_FILES['image']['tmp_name'];
      $uploc     = 'images/'.$imagename;

      $sql = "INSERT INTO sector1(firstname,lastname,email,image)
            VALUES ('$firstname','$lastname','$email','$imagename')";

        if(mysqli_query($conn,$sql) == TRUE){
            move_uploaded_file($tmpname,$uploc);
            echo "data inserted";

        }else{
            echo "data not inserted";
        }

    }
?>
<html>
    <head>
        <style>
                .img{width:50px;height:auto}
        </style>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype ="multipart/form-data">
            firstname : <br>
            <input type="text" name="firstname"><br><br>
            lastname : <br>
            <input type="text" name="lastname"><br><br>
            eamil : <br>
            <input type="email" name="email"><br><br>
            picture : <br>
            <input type="file" name= "image" class="img"><br><br>
            <input type="submit" value="submit" name ="submit">
        </form>
  

 <?php
    $sql = "SELECT * FROM sector1 ORDER BY id DESC";

    $data = mysqli_query($conn, $sql);

   while($row  = mysqli_fetch_assoc($data)){

    $firstname = $row['firstname'];
    $lastname  = $row['lastname'];
    $email     = $row['email'];
    $image     = $row['image'];

    echo "<table border=1><tr></tr>";

    echo "<tr><td>$firstname</td><td>$lastname</td><td>$email</td>";
    echo "<td><img src='images/$image' class='img'></td></tr>";
   }
 ?>
    </table>
   </body>
</html>
           