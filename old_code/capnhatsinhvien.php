<?php
$id = $_POST["id"];
$name = $_POST['name'];
$age = $_POST['age'];
$tel = $_POST['tel'];
// ket noi db
require_once("./functions/db.php");
$conn = ketnoidb();
// cap nha
$sql = "update sinhvien set name='$name', age=$age, tel='$tel' where id=$id";
$conn->query($sql);

// chuyển về trang danh sách
header("Location: /danhsachsinhvien.php");