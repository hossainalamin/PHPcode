
    <?php
    $bgcolor="#444";
    $font="arial";
    $x=5;
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
        <style>
            p {
                margin: 0px;
                padding: 0px;
            }

            body {
                font-family: <?php echo $font;
                ?>
            }

            .php {
                background: <?php echo $bgcolor;
                ?>min-height: 900px;
                margin: 0 auto;
            }

            #head {
                background-color: #444;
                height: 100px;
                margin: 0 auto;
                text-align: center;
                color: aliceblue;
            }

            #maincontent {
                min-height: 400px;
                background-color: darkgray;
            }

            #maincontent h2 {
                text-align: center;
            }

            #footer {

                background: #444;
                color: #fff;
                text-align: center;

            }

        </style>


    </head>

    <body>

        <div class="php">
            <section id="head">
                <h2>PHP learning tuitorial </h2>

            </section>

            <section id="maincontent">
                <hr>
                <h2>Session and cookie</h2>
                <span><?php date_default_timezone_set("Asia/Dhaka"); echo date("h:i:sa");?></span>
                <hr>
                
                <?php
                    $_SESSION['username']="Alamin";
                    $_SESSION['password']="123";
                    echo" Username is ".$_SESSION['username'];
                    echo "<br>";
                    echo" Username is ".$_SESSION['password'];
                    session_destroy();
                    echo"<br>";
                    if(!isset($_COOKIE['visited']))
                    {
                        setcookie("visited",1,time()+84000*30,"/");
                        echo "First time visited in the website.";
                        echo "<br>";
                    }
                    else
                    {
                        echo "Old user ";
                    }
                    setcookie("visited","",time() -3600,"/");
                    echo "Cookie deleted.";
                ?>

            </section>

            <section id="footer">
                <h2>Ending the page.</h2>
                <span>&copy;<?php echo date("Y");?>Alamin's website</span>
            </section>
        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-slim.min.js"></script>
        <script src="js/popper.min.js"></script>
    </body>

    </html>

