<?php
    $cat_id = $_GET['id'];
    require_once("functions/db.php");
    $conn = ketnoidb();
    $sql = "select * from products where cat_id = $cat_id order by id desc";
    $rs = $conn->query($sql);
    $products = [];
    while($row= $rs->fetch_assoc()){
        $products[] = $row;
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
        <div class="row">
            <div class="col-3">
                <h2>Left sidebar</h2>
            </div>
            <div class="col">
                <div class="row">
                    <?php  foreach($products as $item):?>
                    <div class="col-4 mt-3">
                        <div class="card">
                            <img src="<?php echo $item["image"];?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item["name"];?></h5>
                                <p class="card-text">$<?php echo round($item["price"]);?></p>
                                <a href="/product.php?id=<?php echo $item["id"]; ?>" class="btn btn-primary">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>