<?php
$name = $_POST['name'];
$age = $_POST['age'];
$tel = $_POST['tel'];
// ket noi db
require_once("./functions/db.php");
$conn = ketnoidb();
// truy vấn thêm dữ liệu
$sql = "insert into sinhvien(name,age,tel) values('$name',$age,'$tel')";
$conn->query($sql);

// chuyển về trang danh sách
header("Location: /danhsachsinhvien.php");