<?php 
$order_id = $_GET["order_id"];
// cập nhật xong chuyển về trang cảm ơn
header("Location: /thankyou.php?order_id=$order_id");