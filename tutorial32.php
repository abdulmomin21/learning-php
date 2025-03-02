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
                php date and time
                <span style="float:right">
                <?php
                date_default_timezone_set('asia/dhaka');
                echo "bangladesh time is ".date("h:i:sa");
                ?>

                </span>
                <hr>
                    <?php
                    echo "today is ".date("m/d/y") . "<br>";
                   // echo "today is ".date("m-d-y");
                   // echo "today is ".date("m.d.y");
                   // echo "today is ".date("d/m/y");
                   //tarikh dekhar jonno
                   
                   echo "today is ".date ("l") . "<br>";
                   //day dekhar jonno
                   echo "default time is " .date("h:i:sa") . "<br>";
                   //time dekhar jonno

                   date_default_timezone_set('asia/dhaka');

                   echo "bangladesh time is " .date("h:i:sa") . "<br>";
                   //time dekhar jonno
                   echo date_default_timezone_get(). "<br>";
                   //location dekhar jonno


                   //php er aro onek manual function ace google e paoa jabe

                    ?>
                
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>