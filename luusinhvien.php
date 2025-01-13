<?php
$name = $_POST['name'];
$age = $_POST['age'];
$tel = $_POST['tel'];

// kết nối db
$host = 'localhost';
$user = "root";
$pass = "root";
$db = "t2409m";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    die("Kết nối thất bại");
}
// truy vấn thêm dữ liệu
$sql = "insert into sinhvien(name,age,tel) values('$name',$age,'$tel')";
$conn->query($sql);

// chuyển về trang danh sách
header("Location: /danhsachsinhvien.php");