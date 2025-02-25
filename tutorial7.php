<html>
    <head>
        <title>
            php training
        </title>
        <style>
            .maincontent{min-height: 400px;padding: 20px;}
            .main{width:900px;margin: auto;background: <?php echo"#00bfff"?>;}
            .headeroption, .footeroption{background: red;color: #fff;text-align:center;padding: 20px; margin: 0;}
        </style>

        </style>
    </head>
    <body>
        <div class="main">
            <section class="headeroption">
                <h2>php training</h2>
            </section >
            <section class="maincontent">
            <h2>php datatype</h2>
                <h3 style="padding:30px">
                1.string <br>
                2.integer <br>
                3.float <br>
                4.boolean<br>
                5.array<br>
                6.object<br>
                7.null<br>
                8.resource</h3>
                <br><hr>
                1.string
                <hr>
                <?php
                $x = 'php data type';
                echo $x; 
                ?>
                <hr>
                2.integer <br>
                <?php
                $a = 28;
                echo $a . "<br>";
                var_dump($a)
                ?><br><hr>
                3. float <hr>
                <?php
                $x = 28.5;
                var_dump($X)
                ?><br><hr>



                6.object
                <hr>
                <?php
                class student{
                    function department(){
                        return"physics";
                    }
                    function details(){
                        echo $this->department();
                    }
                }

                $st = new student;
                $st->details();
                ?><br><hr>
                7.null <hr>
                <?php
                $x = null;
                var_dump($x);
                ?>


            </section>
            <section class="footeroption">
                <h2>
                    www.google.com
                </h2>
            </section>
        </div>
    </body>
</html>