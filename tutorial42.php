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
                eror reporting
                <span style="float:right">
                <?php
                date_default_timezone_set('asia/dhaka');
                echo "bangladesh time is ".date("h:i:sa");
                ?>

                </span>
                <hr>
                   <?php
                   // eta diye php er information dekha jay
                   //phpinfo();

                    /*
                   error_reporting(E_ERROR | E_WARNING | E_PARSE);
                   $price = 45;
                   if($price == 45){
                    echo "the price is $price";
                   } else{
                    echo "price is not 45";
                   } */

                   
                   error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
                   $price = 45;
                   if($pric == 45){
                    echo "the price is $price";
                   } else{
                    echo "price is not 45";
                   }
                   ?>
                 
                
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>