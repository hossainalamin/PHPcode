<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image File Handle</title>
    <link rel="stylesheet"href="../css/bootstrap.min.css">
</head>
<body>
   <div class="container">
       <section id=header>
           <h2>Uploading Image file With Php</h2>
       </section>
       <section id="main">
           <div class="myform">
               <form action="" method="post" enctype="multipart/form-data">
                 <table class="table table-bordered">
                     <tr>
                         <td>Select Image</td>
                         <td><input type="file" name="image"></td>
                     </tr>
                     <tr>
                     <td><input type="submit" class="btn btn-primary"name="submit" value="submit"></td>
                     </tr>
                 </table>
               </form>
           </div>
       </section>
       <section id="footer">
           <h2>&copy;Traing With Live project</h2>
       </section>
    </div>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
</body>
</html>
