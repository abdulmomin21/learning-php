<?php
$fonts = "vardana";
$bgcolor = "#FB8637";
$fontcolor = "FC8C41";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>php syntax</title>
        <style>
         body{font-family:<?php echo $fonts;?>}
            .maincontent{min-height: 400px;padding: 20px;}
            .phpcoding{width:900px;margin: auto;background: <?php echo"#ddd"?>;}
            .headeroption, .footeroption{background: <?php echo $bgcolor;?>; color:<?php echo $fontcolor;?>;text-align:center;padding: 20px; margin: 0;}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2>php fundamantal training</h2>

            </section>

            <section class="maincontent">
                <?php
               echo"php", " nice";
               echo" <br/> ";
               print"momin ";
               
             /* $a = "abdulmomin";
              var_dump($a) */
              echo " <br/>";

              $a =print("momin");
              var_dump($a);



                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

        </div>
    </body>
</html>