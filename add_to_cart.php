<?php 
session_start();
$id = $_POST["id"];
$buy_qty = $_POST["buy_qty"];

if(isset($_SESSION["cart"])){
    $cart = $_SESSION["cart"];
}else{
    $cart = [];
}
$cart[$id] = $buy_qty;

$_SESSION["cart"] = $cart;

header("Location: /product.php?id=$id");