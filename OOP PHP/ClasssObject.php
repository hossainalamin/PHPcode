<!doctype html>
<html>
<head>
 <title>PHP Code Practice</title>
 <style>
  body{font-family:verdana}
     .phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}
     .headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}
     .headeroption h2, .footeroption h2{margin:0}
     .maincontent{min-height:400px;padding:20px;}
 </style>
</head>
<body>
<div class="phpcoding">
 <section class="headeroption">
  <h2><?php echo "PHP Code Practice"; ?></h2>
 </section> 
 <section class="maincontent"> 
   <?php
     class Fruits{  
         public $name;
         function setFruits($frt)
         {
             $this->name=$frt;
         }
         function getFruits()
         {
             return $this->name;
         }
     }
     $obj=new Fruits();
     $obj->setFruits("apple");
     $obj->getFruits();
     echo $obj->getFruits();
     echo"<br>";
     var_dump($obj instanceof Fruits);//object check for class
   ?>
  </section>
 <section class="footeroption">
  <h2>&copy; <?php echo date("Y") . "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>