<?php include'header.php';?>
   <?php
   class php
   {
       public $framework;
       public function setframework($a)
       {
           $this->framework=$a;
       }
       public function getframework()
       {
           return $this->framework;
       }
       
       public function __clone()
       {
        $lang=new php();
        $lang->setframework($this->framework);
        return $lang;
       }
    }
    
    $php=new php();
    $php->setframework("Cakephp");
    $java=clone $php;//clone can be done using __clone() magic method
    $java->setframework("spring");
    echo $php->getframework()."<br>";
    echo $java->getframework();
    
   ?>


<?php include 'footer.php';?>
