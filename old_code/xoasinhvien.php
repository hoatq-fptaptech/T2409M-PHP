<?php 
 // lấy tham số 
 $id = $_GET["id"];
 // ket noi db
 require_once("./functions/db.php");
 $conn = ketnoidb();
 // truy vấn tìm chính xác sinh viên với id
 $sql = "delete from sinhvien where id=$id";
 $conn->query($sql);

 // chuyển về trang danh sách
header("Location: /danhsachsinhvien.php");
 
