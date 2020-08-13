   <?php
    $bgcolor="#444";
    $font="arial";
    $x=5;
    ?>
   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <title>Image</title>
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
               <h2>File Handling</h2>
               <span><?php date_default_timezone_set("Asia/Dhaka"); echo date("h:i:sa");?></span>
               <hr>
               <?php
               if(isset($_FILES['image']))
               {
                   $targetfile=$_FILES['image']['name'];
                   $targettmp=$_FILES['image']['tmp_name'];
                   /* Check if file already exists
                   if (file_exists($targetfile)) {
                        echo "Sorry, file already exists.";
                        $uploadOk = 0;
                   }
                   // Check file size
                   if ($_FILES["fileToUpload"]["size"] > 500000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                   }
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    }*/
                   
                    move_uploaded_file($targettmp,"img/".$targetfile);
                    echo "Upload Successfull.";

                   
               }
           
               ?>

               <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
                   <input type="file" name="image">
                   <br>
                   <input type="submit" value="submit">
               </form>
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
