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
                create an array
                <span style="float:right">
                <?php
                date_default_timezone_set('asia/dhaka');
                echo "bangladesh time is ".date("h:i:sa");
                ?>

                </span>
                <hr>
                <?php
               /* $car = array("volvo", "bmw", "toyota");
                $length = count($car);

                for($i=0; $i<$length; $i++){
                    echo $car[$i]. "<br>";
                } */

               /* $age = array(
                    "abdullah" => "30",
                    "mamun"    => "32",
                    "jamal"    => "28",
                    "momin"    => "25"

                );
                foreach($age as $key=>$value){
                    echo "name = ".$key.", age = ". $value;
                    echo "<br>";
                } */

                $car = array(
                    array("volvo", "100","90"),
                    array("bmw", "40","30"),
                    array("toyota", "120","100")
                );
                echo $car[0][2];
                ?>
                 
                
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>