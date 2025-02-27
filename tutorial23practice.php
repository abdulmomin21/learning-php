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
                function
                <hr>
                <?php
                /*$x = array(3,4,2,5,1,5,5,6,7,4,6);
                echo count($x); */
                $x = array(4,5,6,7,8,5,3);
                $length = count($x);

                for($i = 0; $i<$length; $i++){
                    echo $x[$i];
                    echo "<br>";
                }
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>