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

            </section><br>
            1. switch statements
            <hr>

            <section class="maincontent">
                <?php
                $coding = "css";

                switch($coding){

                    case "html";
                    echo "i love html";
                    break;

                    case "php";
                    echo "i love php";
                    break;

                    case "java";
                    echo "i love java";
                    break;

                    default:
                    echo "i love programming";


                }
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>