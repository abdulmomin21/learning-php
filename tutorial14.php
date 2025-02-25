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
                <ol>
                    <li>Arithmatic operators</li>
                    <li>assigment operators</li>
                    <li>comparison operators</li>
                    <li>increment/decrement operators</li>
                    <li>logical operators</li>
                    <li>string operators</li>
                    <li>array operators</li>
                </ol>
                <hr>
                4. logical operators
                <hr>
                <?php
                $a = 40;
                $b = 30;
                
                if($a==40 and $b==30){
                    echo "training width live project";
                }else{
                    echo "wrong";
                } 
                /*and &&
                or||
                xor !==
                */
                ?>
                
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>