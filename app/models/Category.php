<?php
namespace App\Models;

class Category extends BaseModel{
    protected $table = 'categories';

    public function getCategory(){
        $sql="select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
 public function createCategory($id,$name){
        $sql = "insert into $this->table values (?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$name]);
    }
    public function getDeilCategory($id){
        $sql="select * from $this->table where id =?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function setCategory($name,$id){
        $sql="update $this->table set name=? where id =?";
        $this->setQuery($sql);
        return $this->execute([$name,$id]);
    }
    public function checkNameAdd($name){
        $sql="select * from $this->table where name =?";
        $this->setQuery($sql);
        return count($this->loadAllRows([$name]))>=1?true:false;
    }
    public function removeCategory($id){
        $sql="delete from $this->table where id =?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
    public function checkNameEdit($name,$id){
        $sql="select * from $this->table where name =? and id !=$id";
        $this->setQuery($sql);
        return count($this->loadAllRows([$name]))>=1?true:false;
    }

}
