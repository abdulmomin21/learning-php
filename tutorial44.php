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
                <h2>php fundamantal training</h2>

            </section>

            <section class="maincontent">
                <hr>
                Explode & Implode Function
                <span style="float:right">
                <?php
                date_default_timezone_set('asia/dhaka');
                echo "bangladesh time is ".date("h:i:sa");
                ?>

                </span>
                <hr>
                  <?php
                /*  $mystr = "we are learning php";
                 print_r(explode(" ", $mystr)); */
                /* $mystr = "we are learning php";
                 $str = explode(" ", $mystr);
                 echo $str[3]; */

                 $mystr = array ("we", "are", "learning", "php");
                 echo implode (", ", $mystr);
                  ?>
                 
                
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>