
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
                <h2>Filter</h2>
                <span><?php date_default_timezone_set("Asia/Dhaka"); echo date("h:i:sa");?></span>
                <hr>
                <table>
                <tr>
                    <td>Filter Name</td>
                    <td>Filter Id</td>
                </tr>
                <?php
                    foreach(filter_list() as $id=>$filter)
                    {
                        echo "<tr><td>".$filter.'</td><td>'.filter_id($filter)."</td></tr>";
                    }
                
                ?>
                </table>
                <?php
                $str="<h2>I love my country</h2>";
                $sanitize=filter_var($str,FILTER_SANITIZE_STRING);
                echo $sanitize;
                echo"<br>";
                
                $int=10.8;
                if(filter_var($int,FILTER_VALIDATE_INT))
                {
                    echo "$int is a valid integer .";
                }
                else
                {
                    echo "$int is not an integer .";
                }
                echo"<br>";

                $email="hossainalamin980@gmail.com";
                if(filter_var($email,FILTER_VALIDATE_EMAIL))
                {
                     echo "$email is a valid gmail .";  
                }
                else
                {
                     echo "$email is not an email .";
                   
                }
                echo"<br>";
              
                $num=300;
                $min=1;
                $max=200;
                
                if(filter_var($num,FILTER_VALIDATE_INT,array("options"=>array("Min_range "=>$min,"max_range"=>$max))))
                {
                    echo "Number is in valid range.";
                }
                else
                {
                    echo "Not valid range.";
                }
                echo"<br>";
                $url="http//www.fb.com";
                if(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED))
                {
                    echo "Query url";
                }
                else
                {
                    echo "Not Query url";
                }
                
                
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

