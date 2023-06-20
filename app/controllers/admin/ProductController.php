<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Product;


class ProductController extends BaseController
{
    public $product;
    public function __construct()
    {
        $this->product=new Product();
    }

    public function index()
    {
        $listProduct = $this->product->getProduct();
        $category= new Category();
        $listCate=$category->getCategory();
        $this->render('product.index', compact('listProduct','listCate'));
    }
    public function addProduct()
    {
        $category= new Category();
        $listCate=$category->getCategory();
        $this->render('product.add',compact('listCate'));
    }
    public function fillProduct($cate_id)
    {
        $listProduct = $this->product->getProductByCate($cate_id);
        $category= new Category();
        $listCate=$category->getCategory();
        $this->render('product.index',compact('listCate','listProduct'));
    }
    public function postProduct()
    {
        if(isset($_POST['add'])){
//            delete_sc_er();
            $errors=[];
            if(empty(trim($_POST['name']))){
                $errors[]="Không được để trống tên sản phẩm";
            }
            if(empty($_POST['price'])){
                $errors[]="Không được để trống giá sản phẩm";
            }
            if($_FILES['image']['size']<=0){
                $errors[]="Không được để trống ảnh sản phẩm";
            }
            if(empty($_POST['quantity'])){
                $errors[]="Không được để trống số lượng sản phẩm";
            }
            if(empty(trim($_POST['detail']))){
                $errors[]="Không được để trống chi tiết sản phẩm";
            }
            if(empty($_POST['cate_id'])||$_POST['cate_id']==''){
                $errors[]="Không được để trống danh mục sản phẩm";
            }
        }
        if(count($errors)>0){
//            $_SESSION['errors']=$errors;
//            header("Location:". BASE_URL.'add-product');die;
            redirect('errors',$errors,'add-product');
        }else{
            $name=$_POST['name'];
            $price=$_POST['price'];
            $image=save_file('image','products/');
//            var_dump($image);die;
            $quantity=$_POST['quantity'];
            $detail=$_POST['detail'];
            $cate_id=$_POST['cate_id'];
            $result= $this->product->addProduct(null,$name,$image,$price,$quantity,$detail,$cate_id);
            if($result){
//               $_SESSION['success']="Thêm thành công!";
//               header("Location:". BASE_URL.'add-product');die;
                redirect('success',"Thêm thành công!",'add-product');
            }

        }

    }
    public function editProduct($id){
        $product=$this->product->getDeilProduct($id);
        $category= new Category();
        $listCate=$category->getCategory();
        $this->render('product.edit',compact('product','listCate'));
    }
    public function updateProduct($id){
        if(isset($_POST['save'])){
            $errors=[];
            if(empty($_POST['name'])){
                $errors[]="Không được để trống tên sản phẩm";
            }
            if(empty($_POST['price'])){
                $errors[]="Không được để trống giá sản phẩm";
            }
        }
        if(count($errors)>0){
//            $_SESSION['errors']=$errors;
//            header("Location:". BASE_URL.'add-product');die;
            redirect('errors',$errors,'edit-product/'.$id);
        }else{
            $name=$_POST['name'];
            $price=$_POST['price'];
            $image=save_file('image','products/');
            $quantity=$_POST['quantity'];
            $detail=$_POST['detail'];
            $cate_id=$_POST['cate_id'];

            $result= $this->product->setProduct($name,$image,$price,$quantity,$detail,$cate_id,$id);
            if($result){
//               $_SESSION['success']="Thêm thành công!";
//               header("Location:". BASE_URL.'add-product');die;
                redirect('success',"Sửa thành công!",'edit-product/'.$id);
            }

        }
    }
    public function deleteProduct($id){
        $this->product->removeProduct($id);
        $this->index();
    }

    public function searchProduct(){
        $keyword=$_POST['keyword'];
        $keyword1=$keyword;
//        var_dump($keyword);die;
        $listProduct=$this->product->findProduct($keyword,$keyword1);
        $category= new Category();
        $listCate=$category->getCategory();
        $this->render('product.index',compact('listProduct','listCate'));
    }
}