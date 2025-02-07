<?php
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
        <h1><?php echo $product["name"]; ?></h1>
    </div>
</body>
</html>