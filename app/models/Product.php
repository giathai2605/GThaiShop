<?php

namespace App\Models;

class Product extends BaseModel
{
    protected $table = 'products';
    public function getProduct(){
        $sql="select * from ".$this->table;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getProductByCate($cate_id){
        $sql="select * from ".$this->table." where cate_id =?";
        $this->setQuery($sql);
        return $this->loadAllRows([$cate_id]);
    }
    public function addProduct($id,$name,$image,$price,$quantity,$detail,$cate_id){
        $sql = "insert into $this->table values (?,?,?,?,?,?,?)";
        $this->setQuery($sql);
//        var_dump($sql);die;
        return $this->execute([$id,$name,$image,$price,$quantity,$detail,$cate_id]);
    }
    public function getDeilProduct($id){
        $sql="select * from ".$this->table." where id =?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function setProduct($name,$image,$price,$quantity,$detail,$cate_id,$id){
        if($_FILES['image']['size']<=0){
            $sql="update $this->table set name=?,price=?,quantity=?,detail=?,cate_id=? where id =?";
            $this->setQuery($sql);
            return $this->execute([$name,$price,$quantity,$detail,$cate_id,$id]);
        }
            $sql="update $this->table set name=?,image=?,price=?,quantity=?,detail=?,cate_id=? where id =?";
            $this->setQuery($sql);
            return $this->execute([$name,$image,$price,$quantity,$detail,$cate_id,$id]);

    }
    public function removeProduct($id){
        $sql="delete from $this->table where id =?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
    public function findProduct($keyword,$keyword1){
        $sql="SELECT p.*,c.name as cate_name FROM $this->table p JOIN categories c ON p.cate_id = c.id"
            . " WHERE p.name LIKE ? or c.name LIKE ?";
        $this->setQuery($sql);
//        var_dump($this->sql);die;
        return $this->loadAllRows(['%'.$keyword.'%', '%'.$keyword1.'%']);
    }
}


