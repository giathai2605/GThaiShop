<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "gthaishop";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL = "http://localhost/GThaiShop/";
const IMG_PATH = BASE_URL . "public/uploads/";
const AVATAR_PATH = IMG_PATH . "user-avatars/";
const PRODUCT_PATH = IMG_PATH . "products/";
const RESOURCES_PATH = BASE_URL . "resources/";


function route($name){
    return BASE_URL .$name;
}

function dd($data){
    echo "<pre>";
    var_dump($data);
    die;
}

function redirect($key,$message,$route){
    $_SESSION[$key]=$message;
    switch ($key){
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header("Location:". BASE_URL. $route."?message=".$key);
    die;
}
const IMAGE_DIR ="./public/uploads/";
function save_user_file($fieldname){ // Hàm lưu file, $fieldname là tên trường file, $target_dir là thư mục lưu file
    $file_uploaded = $_FILES[$fieldname]; // mảng chứa thông tin file
    $file_name =uniqid('',true).'-'. basename($file_uploaded["name"]); // lấy tên file
    $target_path = IMAGE_DIR."user-avatars/" .$file_name; // đường dẫn file
    move_uploaded_file($file_uploaded["tmp_name"], $target_path); // di chuyển file vào thư mục
    return $file_name; // trả về tên file
}
function save_product_file($fieldname){ // Hàm lưu file, $fieldname là tên trường file, $target_dir là thư mục lưu file
    $file_uploaded = $_FILES[$fieldname]; // mảng chứa thông tin file
    $file_name =uniqid('',true).'-'. basename($file_uploaded["name"]); // lấy tên file
    $target_path = IMAGE_DIR."ecom-images/products/" .$file_name; // đường dẫn file
    move_uploaded_file($file_uploaded["tmp_name"], $target_path); // di chuyển file vào thư mục
    return $file_name; // trả về tên file
}



