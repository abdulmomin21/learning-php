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
                php from validation
                <hr>

                    <form method="post" action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>">
                    <table>
                        <tr>
                            <td>name : </td>
                            <td> <input type="text" name="name" required ="1"> </td>
                        </tr>
                        <tr>
                            <td>e-mail</td>
                            <td><input type="email" name="email"></td>

                        </tr>
                        <tr>
                            <td>websilte: </td>
                            <td><input type="text" name ="email"></td>
                        </tr>
                        <tr>
                            <td>comment</td>
                            <td> <textarea name ="comment" rows="5" cols="40"></textarea></td>
                        </tr>
                        <tr>
                            <td>gender</td>
                            <td><input type="radio" name="gender" value="male">male</td>
                            <td><input type="radio" name="gender" value="female">female</td>female
                            

                        </tr>
                        <tr>
                           <td></td>
                           <td><input type="submit" name="submit" value="submit"></td>
                        </tr>
                    </table>
                    </form>


                    <?php

                        $name = $email = $website = $comment = $gender ="";
                        if($_SERVER["REQUEST_METHOD"] == "POST") {
                            $name      =validate($_post["name"]);
                            $email     =validate($_post["email"]);
                            $website   =validate($_post["website"]);
                            $comment   =validate($_post["comment"]);
                            $gender    =validate($_post["gender"]);

                            echo "name : ". $name. "<br>";
                            echo "email : ". $email. "<br>";
                            echo "website : ". $website. "<br>";
                            echo "comment : ". $comment. "<br>";
                            echo "gender : ". $gender. "<br>";
                            
                        }
                        function validate($data){
                            $data= trim($data);
                            $data = scripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }
                       
                       
                    ?>
                
            </section>
            <section class="footeroption">
                <h2><?php echo"www.google.com //momin"?></h2>
            </section>

            


        </div>
    </body>
</html>