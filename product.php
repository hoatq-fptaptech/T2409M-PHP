<?php
    session_start();
    $id = $_GET['id'];
    require_once("functions/db.php");
    $conn = ketnoidb();
    $sql = "select * from products where id = $id";
    $rs = $conn->query($sql);
    $product = $rs->fetch_assoc();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("html/head.php");?>
</head>
<body>
    <?php include_once("html/nav.php");?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img class="w-100" src="<?php echo $product["image"];?>"/>
            </div>
            <div class="col-6">
                <h1><?php echo $product["name"]; ?></h1>
                <h3 class="text-danger">$<?php echo round($product["price"]); ?></h3>
                <p><?php echo $product["description"]; ?></p>
                <div class="row">
                    <div class="col-4">
                    <form action="/add_to_cart.php" method="post">
                        <input name="id" value ="<?php  echo $product["id"];?>"type="hidden"/>
                        <div class="input-group mb-3">
                            <input name="buy_qty" value="1" type="text" class="form-control" placeholder="Qty" >
                            <button class="btn btn-outline-primary" type="button" id="button-addon2">Add to cart</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>