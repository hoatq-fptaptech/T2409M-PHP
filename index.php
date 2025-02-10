<?php
session_start();
    require_once("functions/db.php");
    $conn = ketnoidb();
    $sql = "select * from products order by id desc limit 8";
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
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="banner/banner-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="banner/banner-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="banner/banner-1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container">
        <h2>Sản phẩm mới</h2>
        <div class="row">
            <?php  foreach($products as $item):?>
            <div class="col-3 mt-3">
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
</body>
</html>