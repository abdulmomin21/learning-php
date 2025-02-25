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
                <?php
                $x = "php string";
                echo strlen($x) . "<br>";
                ?>
                <?php
                $x = 'php string';
                echo str_word_count($x) . "<br>";
                ?>
                <?php
                //reverse
                $x = "php string";
                echo strrev($x) . "<br>";
                ?>
                <?php
                $x = "php is nice";
                echo strpos($x, "nice") . "<br>";
                ?>
                <?php
                $x = 'php is nice';
                echo str_replace('php','java', $x);
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>