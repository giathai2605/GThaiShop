<?php
namespace App\Models;

class User extends BaseModel {
    protected $table = 'users';

    public function getUser(){
        $sql="select * from $this->table ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
       public function createUser($id,$name,$avatar,$email,$phone,$password){
            $sql = "insert into $this->table values (?,?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute([$id,$name,$avatar,$email,$phone,$password]);
        }
        public function checkEmailAdd($email){
            $sql="select * from $this->table where email =?";
            $this->setQuery($sql);
            return count($this->loadAllRows([$email]))>=1?true:false;
        }
        public function checkEmailEdit($email,$id){
            $sql="select * from $this->table where email =? and id !=$id";
            $this->setQuery($sql);
            return count($this->loadAllRows([$email]))>=1?true:false;
        }
        public function setUser($name,$avatar,$email,$phone,$id){
            if($_FILES['avatar']['size']<=0){
                $sql="update $this->table set name=?,email=?,phone=? where id =?";
                $this->setQuery($sql);
                return $this->execute([$name,$email,$phone,$id]);
            }
            $sql="update $this->table set name=?,avatar=?,email=?,phone=? where id =?";
            $this->setQuery($sql);
            return $this->execute([$name,$avatar,$email,$phone,$id]);
        }
    public function getDetailUser($id){
        $sql="select * from $this->table where id =?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

        public function removeUser($id){
            $sql="delete from $this->table where id =?";
            $this->setQuery($sql);
            return $this->execute([$id]);
        }

        public function findUser($name,$email,$phone){
            $sql="select * from $this->table where name like ? or email like ? or phone like ?";
            $this->setQuery($sql);
            return $this->loadAllRows(['%'.$name.'%','%'.$email.'%','%'.$phone.'%']);
        }

}
