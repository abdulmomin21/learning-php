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
                    $name = array(
                        array(
                            'id'=>'200',
                            'first_name'=>'abdul',
                            'last_name'=>'momin'
                        ),
                        array(
                            'id'=>'201',
                            'first_name'=>'md',
                            'last_name'=>'asiq'
                        ),
                        array(
                            'id'=>'202',
                            'first_name'=>'fazle',
                            'last_name'=>'rabby'
                        )
                        );
                        $lastname = array_column($name, 'last_name', 'id');
                        print("<pre>");
                        print_r($lastname);
                        print("</pre>");
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>