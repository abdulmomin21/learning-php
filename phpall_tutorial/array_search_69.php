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
                array_search
                <span style="float:right">
                <?php
                date_default_timezone_set('asia/dhaka');
                echo "bangladesh time is ".date("h:i:sa");
                ?>

                </span>
                <hr>
                <?php
                $color_one = array(
                    "a" => "red" ,
                    "b" => "green",
                    "c" => "blue"
                );
                if(isset($_POST['text'])){
                    global $txt;
                    $txt = $_POST['text'];
                    $result = array_search($txt, $color_one);
                    echo "you have searched by -> $txt and your key is ->$result";
                }
                ?>

            <form action="array_search_69.php" method="post">
                <input type="text" name="text" value="<?php global $txt; echo $txt;?>">
                <input type="submit" value="submit">
            </form>
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>