<?php
    session_start();
    if(isset($_SESSION["cart"])){
        $cart = $_SESSION["cart"];
    }else{
        $cart = [];
    }
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
                <th>Buy QTY</th>
            </thead>
            <tbody>
                <?php foreach($cart as $id=>$buy_qty):?>
                   <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $buy_qty;?></td>
                   </tr>     
                <?php endforeach;?>    
            </tbody>
        </table>
    
    </div>
    
    
</body>
</html>