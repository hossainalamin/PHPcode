<?php
include "CRUDconnection.php";
abstract class main{
   protected $table;
    public function readAll()
    {
        $sql="select * from $this->table";
        $stmt = CRUDconnection::prepareOwn($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    abstract public function insert();
    abstract public function update($id);
    public function readById($id)
    {
        $sql="select * from $this->table where id=:id;";
        $stmt = CRUDconnection::prepareOwn($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();

    }
        public function delete($id)
    {
        $sql="delete from $this->table  where id=:id";
        $stmt = CRUDconnection::prepareOwn($sql);
        $stmt->bindParam(':id',$id);
        return $stmt->execute();
    }


}


?>