<?php
class Database
{
    public $driver;
    public $link;
    
    
    public function setdriver($driver)
    {
        $this->driver=$driver;
    }
    
    public function connect()
    {
        if($this->driver == "mysql");
        {
            $mngmydb=new mysql();
            $mngmydb->setHost("localhost");
            $mngmydb->setDB("dbname");
            $mngmydb->setUser("user");
            $mngmydb->setpass("pass");
            $this->link = $mngmydb->setconnect();
        }
        else if($this->driver == "sqlite")
        {
            $mngmydb=new sqlite();
            $mngmydb->setHost("host");
            $mngmydb->setDB("db");
            $mngmydb->setUser("user");
            $mngmydb->setpass("pass");
            $this->link = $mngmydb->setconnect();            
        }
        
        
    }
}


?>