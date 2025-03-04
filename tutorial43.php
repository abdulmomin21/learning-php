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
                php exception
                <span style="float:right">
                <?php
                date_default_timezone_set('asia/dhaka');
                echo "bangladesh time is ".date("h:i:sa");
                ?>

                </span>
                <hr>
                  <?php
                  /*
                  function numcheck($num){
                    if($num >1){
                        throw new exception(" value must be 1 or below");

                    }
                    return true;
                  }
                  try{
                    numcheck(2);
                    echo "if you see this , the number is 1 or below";
                  }
                  catch(exception $e) {
                    echo "message: ".$e->getmessage();
                  } */
                 /* function numcheck($num){
                    if($num >1){
                        throw new exception(" value must be 1 or below");

                    }
                    return true;
                  }
                  try{
                    numcheck(0);
                    echo "if you see this , the number is 1 or below";
                  }
                  catch(exception $e) {
                    echo "message: ".$e->getmessage();
                  } */
                 /* function numcheck($num){
                    if($num !=5){
                        throw new exception("number is not 5");

                    }
                    return true;
                  }
                  try{
                    numcheck(0);
                    echo "yes you have done";
                  }
                  catch(exception $e) {
                    echo "message: ".$e->getmessage();
                  } */
                    function numcheck($num){
                    if($num !=5){
                        throw new exception("number is not 5");

                    }
                    return true;
                  }
                  try{
                    numcheck(5);
                    echo "yes you have done";
                  }
                  catch(exception $e) {
                    echo "message: ".$e->getmessage();
                  }
                  ?>
                 
                
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>