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
        <div class="row">
            <div class="col-8">
                <form action="#" method="post">
                    <h4>Customer infomation</h4>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label>Full name</label>
                            <input type="text" name="customer_name" placeholder="Full name" class="form-control"/>
                        </div>
                        <div class="col-6 mb-3">
                            <label>Telephone</label>
                            <input type="tel" name="customer_tel" placeholder="Telephone" class="form-control"/>
                        </div>
                        <div class="col-12 mb-3">
                            <label>Address</label>
                            <textarea class="form-control" name="customer_address"placeholder="Address"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <h4>Payment method</h4>
                            <div class="form-check">
                                <input class="form-check-input" value="COD" type="radio" name="payment_method" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    COD
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="PAYPAL" type="radio" name="payment_method" id="flexRadioDefault2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Paypal
                                </label>
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-danger">Place order</button>
                        </div>
                      
                    </div>
                </form>
            </div>
            <div class="col">
                <h4>Cart summary</h4>
                <ul>
                <?php foreach($products as $item):?>
                    <?php $total +=  $cart[$item["id"]] * $item["price"];?>
                    <li>
                        <img width="50" src="<?php echo $item["image"];?>"/>
                        <?php echo $item["name"];?>
                        ($<?php echo $item["price"];?> x <?php echo $cart[$item["id"]];?>)
                        <span>
                            ===> $<?php echo $cart[$item["id"]] * $item["price"];?>
                        </span>
                    </li>
                <?php endforeach;?>    
                <li>Subtotal: $<?php echo $total; ?></li>
                <li>Shipping fee: $10</li>
                <li><h4>Grand total:  $<?php echo $total + 10; ?></h4></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>