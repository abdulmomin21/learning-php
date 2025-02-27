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
                php superglobals [$GLOBALS $_SERVER]
                <hr>
                <?php
               /* $x=5;
                $y=10;
                function sum(){
                    $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
                }
                sum();
                echo $z; */
                echo $_SERVER['PHP_SELF'];
                // site er nam dekhar jonno server name
               // echo $_SERVER['SERVER_NAME'];

                //ami ekhon kothay aci seta ber korar ba puro link ta ber korar jonno

                //echo $_SERVER['SCRIPT_NAME'];
                //ami ki browser use korci seta ber korar jonno
               // echo $_SERVER['HTTP_USER_AGENT'];
                //server er ip address ber korar jonno
              //  echo "SERVER IP" .$_SERVER['SERVER_ADDR'];


                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>