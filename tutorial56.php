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
            input[type= "text"]{width:250px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2>php fundamantal training</h2>

            </section>

            <section class="maincontent">
                <hr>
                array_intersect
                <span style="float:right">
                <?php
                date_default_timezone_set('asia/dhaka');
                echo "bangladesh time is ".date("h:i:sa");
                ?>

                </span>
                <hr>
              <?php
              $array_one = array(
                "a" => "red",
                "b" => "black",
                "c" => "yellow"
              );
              $array_two = array(
                "a" => "red",
                "b" => "black",
                "c" => "yellow",
                "d" => "white"
              );
              $array_three = array(
                "a" => "red",
                "b" => "black",
                "c" => "yellow",
                "f" => "blue"
              );
              $result = array_intersect($array_one, $array_two, $array_three);
              print("<pre>");
              print_r($result);
              print("</pre>");
              ?>
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>