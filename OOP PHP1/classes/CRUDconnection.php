
<?php
class CRUDconnection
{    
    private static $pdo;
    public static function connection()
    {
        $dns="mysql:host=localhost;dbname=db_student";
        $user="root";
        $pass="";
        try
        {
            self::$pdo=new PDO($dns,$user,$pass);
        }
        catch(PDOExecptoon $e)
        {
            echo $e->getMessage();
        }
        return self::$pdo;
    }
    
    public static function prepareOwn($sql)
    {
        return self::connection()->prepare($sql);
    }
}
?>
