<?php
namespace App\Controllers;
use App\Models\Category;

class CategoryController extends BaseController
{
    public $category;
    public function __construct()
    {
        $this->category=new Category();
    }

    public function index()
    {
        $listCate = $this->category->getCategory();
        $this->render('category.index', compact('listCate'));
    }
    public function addCategory()
    {
        $this->render('category.add');
    }
    public function postCategory()
    {
        if(isset($_POST['add'])){
            $errors=[];
            if(empty($_POST['name'])){
                $errors[]="Không được để trống tên danh mục";
            }else{
                $name=$_POST['name'];
                $check=$this->category->checkNameAdd($name);
                if($check){
                    $errors[]="Tên danh mục đã tồn tại";
                }
            }

        }
        if(count($errors)>0){
            redirect('errors',$errors,'add-cate');
        }else{
            $name=$_POST['name'];
            $result= $this->category->createCategory(null,$name);
            if($result){
                $_SESSION['success']="Thêm thành công";
                redirect('success',"Thêm thành công!",'add-cate');

            }else{
                $_SESSION['error']="Thêm thất bại";
                redirect('errors',$errors,'add-cate');

            }
        }
    }
    public function editCategory($id)
    {
        $cate=$this->category->getDeilCategory($id);
        $this->render('category.edit',compact('cate'));
    }
    public function updateCategory($id)
    {
        if(isset($_POST['save'])){
            $errors=[];
            if(empty($_POST['name'])){
                $errors[]="Không được để trống tên danh mục";
            }else{
                $name=$_POST['name'];
                $check=$this->category->checkNameEdit($name,$id);
                if($check){
                    $errors[]="Tên danh mục đã tồn tại";
//                    var_dump($errors);die;
                }
            }
        }
        if(count($errors)>0){
            redirect('errors',$errors,'edit-cate/'.$id);

        }else{
            $name=$_POST['name'];
            $result= $this->category->setCategory($name,$id);
            if($result){
                $_SESSION['success']="Sửa thành công";
                redirect('success',"Sửa thành công!",'edit-cate/'.$id);
            }else{
                $_SESSION['errors']="Sửa thất bại";
                redirect('errors',$_SESSION['errors'],'edit-cate/'.$id);

            }
        }
    }


    public function deleteCategory($id)
    {
        $result=$this->category->removeCategory($id);
        if($result){
            $_SESSION['success']="Xóa thành công";
            redirect('success',"Xóa thành công!",'list-cate');
        }else{
            $_SESSION['errors']="Xóa thất bại";
                redirect('errors',$_SESSION['errors'],'list-cate');
        }
    }
}