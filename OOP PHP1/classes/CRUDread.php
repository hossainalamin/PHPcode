<?php
include "main.php";
class CRUDread extends main
{
    protected $table="tbl_student";
    public $name;
    public $dep;
    public $age;
    public function setName($name)
    {
        $this->name=$name;
    }
    public function setDep($dep)
    {
        $this->dep=$dep;
    }
    public function setAge($age)
    {
        $this->age=$age;
    }
    public function insert()
    {
        $sql="insert into $this->table(name,dep,age) values(:name,:dep,:age)";
        $stmt = CRUDconnection::prepareOwn($sql);
        $stmt->bindParam(':name',$this->name);
        $stmt->bindParam(':dep',$this->dep);
        $stmt->bindParam(':age',$this->age);
        return $stmt->execute();
    }
    public function update($id)
    {
        $sql="update $this->table set name=:name,dep=:dep,age=:age where id=:id";
        $stmt = CRUDconnection::prepareOwn($sql);
        $stmt->bindParam(':name',$this->name);
        $stmt->bindParam(':dep',$this->dep);
        $stmt->bindParam(':age',$this->age);
        $stmt->bindParam(':id',$id);
        return $stmt->execute();   
    }
    
}
?>