<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>About Us</h1>
<?php 
    // code php 
    $total = 10;
    if($total >= 10){
        echo "<h2>Có 10 người đang xem...</h2>";
    }else{
        echo "<h2>Không đủ 10 người rồi, phải đóng tiền mở lớp...</h2>";
    }
?>
<h3>Kết thúc buổi học.</h3>
<?php
    $qty = 5;
?>
<h2>Thông tin sản phẩm</h2>
<h2>Tên sản phẩm: Iphone 16 Pro Max</h2>
<h3>Giá: 30.000.000 VND</h3>
<?php if($qty > 0): ?>
    <p>Còn hàng</p>
    <button type="button">Thêm vào giỏ hàng</button>
<?php else: ?>
    <p>Hết hàng</p>
<?php endif ?>
<?php for($i=0;$i<10;$i++): ?>    
    <p><?php echo $i*$i; ?></p>
<?php endfor?>    
</body>
</html>