<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\User;


class UserController extends BaseController{
    protected $User;
    public function __construct()
    {
        $this->User=new User();
    }
    public function index(){
        $users=$this->User->getUser();
        $this->render('user.index',compact('users'));
    }
    public function addUser(){
        $this->render('user.add');
    }
    public function postUser(){
        if(isset($_POST['add'])){
            $errors=[];
            if(empty(trim($_POST['name']))){
                $errors[]="Không được để trống tên";
            }
            if($_FILES['avatar']['size']<=0){
                $errors[]="Không được để trống ảnh";
            }
            if(empty(trim($_POST['email']))){
                $errors[]="Không được để trống email";
            }else{
                $regex="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
                if(!preg_match($regex,$_POST['email'])){
                    $errors[]="Email không đúng định dạng";
                }
            }
            if(empty(trim($_POST['password']))){
                $errors[]="Không được để trống mật khẩu";
            }else{
                if($_POST['password']!= $_POST['re-password']){
                    $errors[]="Mật khẩu không khớp";
                }
            }

            if(empty(trim($_POST['phone']))){
                $errors[]="Không được để SĐT";
            }
            if($this->User->checkEmailAdd($_POST['email'])){
                $errors[]="Email đã tồn tại";
            }
        }
        if(count($errors)>0){
            redirect('errors',$errors,'add-user');
        }else{

            $name=$_POST['name'];
            $avatar=save_file('avatar','users/');
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
            $result=$this->User->createUser(null,$name,$avatar,$email,$phone,$password);


            if($result){
                $_SESSION['success']="Thêm mới thành công";
                redirect('success',"Thêm mới thành công!",'add-user');
            }else{
                $_SESSION['errors']="Thêm mới thất bại";
                redirect('errors',$_SESSION['errors'],'add-user');
            }
        }
    }
    public function editUser($id){
        $user=$this->User->getDetailUser($id);
        $this->render('user.edit',compact('user'));
    }
    public function updateUser($id){
        if(isset($_POST['save'])){
            $errors=[];
            if(empty(trim($_POST['name']))){
                $errors[]="Không được để trống tên";
            }
            if(empty(trim($_POST['email']))){
                $errors[]="Không được để trống email";
            }else{
                //regex email
                $regex="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
                if(!preg_match($regex,$_POST['email'])){
                    $errors[]="Email không đúng định dạng";
                }
            }
            if(empty(trim($_POST['phone']))){
                $errors[]="Không được để SĐT";
            }
            if($this->User->checkEmailEdit($_POST['email'],$id)){
                $errors[]="Email đã tồn tại";
            }
        }
        if(count($errors)>0){
            redirect('errors',$errors,'edit-user/'.$id);
        }else{
            $name=$_POST['name'];
            $email=$_POST['email'];
            $avatar=save_file('avatar','users/');
            $phone=$_POST['phone'];
            $result=$this->User->setUser($name,$avatar,$email,$phone,$id);
            if($result){
                $_SESSION['success']="Cập nhật thành công";
                redirect('success',"Cập nhật thành công!",'edit-user/'.$id);
            }else{
                $_SESSION['errors']="Cập nhật thất bại";
                redirect('errors',$_SESSION['errors'],'edit-user/'.$id);
            }
        }
    }
    public function deleteUser($id){
        $result=$this->User->removeUser($id);
        if($result){
            $_SESSION['success']="Xóa thành công";
            redirect('success',"Xóa thành công!",'list-user');
        }else{
            $_SESSION['errors']="Xóa thất bại";
            redirect('errors',$_SESSION['errors'],'list-user');
        }
    }
    public function searchUser(){
        $keyword=$_POST['keyword'];
        $name=$keyword;
        $email=$keyword;
        $phone=$keyword;
        $users=$this->User->findUser($name,$email,$phone);
        $this->render('user.index',compact('users'));
    }
}
