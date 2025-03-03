<?php 
session_start();
//eta diye cookie delete kora hoy
setcookie('visited', "", time() -3600);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>php syntax</title>
        <style>
            .maincontent{min-height: 400px;padding: 20px;}
            .phpcoding{width:900px;margin: auto;background: <?php echo"#ddd"?>;}
            .headeroption, .footeroption{background: red;color: #fff;text-align:center;padding: 20px; margin: 0;}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2>php cookie</h2>

            </section>

            <section class="maincontent">
                <hr>
                php filters
                <span style="float:right">
                <?php
                date_default_timezone_set('asia/dhaka');
                echo "bangladesh time is ".date("h:i:sa");
                ?>

                </span>
                <hr>
                    <!-- eta diye ip  name ,id ,etc ber kora jay -->
                  <!-- <table>
                    <tr>
                        <td>filter name</td>
                        <td>filter ID</td>
                    </tr>
                    <?php
                    foreach( filter_list() as $id =>$filter){
                        echo '<tr><td>' .$filter . '</td><td>' .filter_id($filter) . '</td><tr>';
                    }
                    ?>
                   </table> -->
                  <!-- <?php
                   $str = "<h2> i am learning php.</h2>";
                   $newstr = filter_var($str, FILTER_SANITIZE_STRING);
                   echo $newstr;
                   ?> -->

                 <!--  <?php
                   $int = 50.6;
                   if(filter_var($int, FILTER_VALIDATE_INT)){
                    echo "it is integer value.";
                   }else {
                    echo "it is not integer value.";
                   }
                   ?> -->
                  <!-- <?php
                   $int = 50;
                   if(filter_var($int, FILTER_VALIDATE_INT)){
                    echo "it is integer value.";
                   }else {
                    echo "it is not integer value.";
                   }
                   ?> -->
                   <!-- <?php
                   $ip = "192.0.0.1";
                   if(filter_var($ip, FILTER_VALIDATE_IP)){
                    echo "$ip is valid ip address.";
                   }else {
                    echo "$ip is not valid.";
                   }
                   ?> -->
                   <?php
                   $mail = "momin@gmail.com";
                   if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                    echo "$mail is valid ip address.";
                   }else {
                    echo "$mail is not valid.";
                   }
                   ?>
                   <br>

<?php
                   $url = "http://www.trainingwithliveproject.com";
                   if(filter_var($url, FILTER_VALIDATE_URL)){
                    echo "$url is valid valid.";
                   }else {
                    echo "$url is not valid.";
                   }
                   ?>

                               
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>