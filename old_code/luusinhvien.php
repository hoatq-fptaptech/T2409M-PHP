<?php
$name = $_POST['name'];
$age = $_POST['age'];
$tel = $_POST['tel'];
// upload file
$avatar = $_FILES["avatar"];
$file_name = uniqid(). $avatar["name"];
$folderUpload = 'uploads/';
// lấy đuôi file để kiểm tra
$ext =  pathinfo($file_name,PATHINFO_EXTENSION);
$allow = ["png","gif","jpg","jpeg"];
if(in_array($ext,$allow)){
    move_uploaded_file($avatar["tmp_name"], $folderUpload.$file_name);
}else{
    die("File không đúng định dạng cho phép");
}


// ket noi db
require_once("./functions/db.php");
$conn = ketnoidb();
// truy vấn thêm dữ liệu
$sql = "insert into sinhvien(name,age,tel,avatar) values('$name',$age,'$tel','$folderUpload$file_name')";
$conn->query($sql);

// chuyển về trang danh sách
header("Location: /danhsachsinhvien.php");