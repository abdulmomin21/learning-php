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
                php superglobals [$_GET]
                <hr>
                <a href="text.php?msg=good$text=bye">sent data</a>
                <?php
                $message = $_GET["msg"];
                $word = $_GET["txt"];
                
                echo "first text: " .$message;
                echo "<br>";
                echo "second text : " .$word;
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>