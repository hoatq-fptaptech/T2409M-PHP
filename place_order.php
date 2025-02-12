<?php 
$customer_name = $_POST["customer_name"];
$customer_tel = $_POST["customer_tel"];
$customer_address = $_POST["customer_address"];
$payment_method = $_POST["payment_method"];
$created_at = date("Y-m-d H:i:s");
// tính hàng hoá đơn hàng
session_start();
if(isset($_SESSION["cart"])){
    $cart = $_SESSION["cart"];
}else{
    $cart = [];
}
$ids = array_keys($cart); // [1,5,4]
$ids = implode(",",$ids); //[1,5,4] =>  "1,5,4"
require_once("functions/db.php");
$conn = ketnoidb();
$sql = "select * from products where id in ($ids)";
$rs = $conn->query($sql);
$products = [];
while($row= $rs->fetch_assoc()){
    $products[] = $row;
}
$total = 0;
foreach($products as $item){
    $product_id = $item["id"];
    $total += $item["price"] * $cart[$product_id];
}
$grand_total = $total + 10;// cộng thêm phí vận chuyển
$paid = 0;
$status =0 ;
// thêm đơn hàng
$sql = "insert into orders(created_at,grand_total,customer_name,customer_tel,customer_address,payment_method,paid,status)
    values('$created_at',$grand_total,'$customer_name','$customer_tel','$customer_address','$payment_method',$paid,$status)";
$conn->query($sql);    
// thêm các sản phẩm đã mua

foreach($products as $item){
    $product_id = $item["id"];
    $t = $item["price"] * $cart[$product_id];
    $sql = "insert into order_products(order_id,product_id,buy_qty,price)
     values()";
}