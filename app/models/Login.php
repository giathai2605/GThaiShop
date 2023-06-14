<?php
namespace App\Models;

class Login extends BaseModel {
    protected $table = 'users';
    public function getUserByEmail($email){
        $sql="select * from $this->table where email =?";
        $this->setQuery($sql);
        return $this->loadRow([$email]);
    }
    public function login($email,$password){
        $user=$this->getUserByEmail($email);
        if($user){
            if(password_verify($password,$user->password)){
                return $user;
            }
        }
        return false;
    }
    public function checkLogin(){
        if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
            header('location: ' . BASE_URL . 'login');die;
        }
        header("Location:".BASE_URL);die;
    }
}
