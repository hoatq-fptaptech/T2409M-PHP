<?php
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("html/head.php");?>
</head>
<body>
    <?php include_once("html/nav.php");?>
    <div class="container">
        <h1>Shopping cart</h1>
        <table class="table table-stripped">
            <thead>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Buy QTY</th>
                <th>Price</th>
                <th>Total</th>
            </thead>
            <tbody>
                <?php foreach($products as $item):?>
                    <?php $total +=  $cart[$item["id"]] * $item["price"];?>
                   <tr>
                        <td><?php echo $item["id"];?></td>
                        <td><img width="100" src="<?php echo $item["image"];?>"/></td>
                        <td><?php echo $item["name"];?></td>
                        <td><?php echo $cart[$item["id"]];?></td>
                        <td><?php echo $item["price"];?></td>
                        <td><?php echo $cart[$item["id"]] * $item["price"];?></td>
                    
                   </tr>     
                <?php endforeach;?>    
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-end">Subtotal:</td>
                    <td><?php echo $total;?></td>
                </tr>
            </tfoot>
        </table>
        <a href="/checkout.php"class="btn btn-danger">Go to checkout</a>
    </div>
    
    
</body>
</html>