<?php 
$order_id = $_GET["order_id"];
require_once("functions/db.php");
$conn = ketnoidb();
$sql = "update orders set paid = 1, status = 1 where id = $order_id";
$rs = $conn->query($sql);
// cập nhật xong chuyển về trang cảm ơn
header("Location: /thankyou.php?order_id=$order_id");