<?php
    // lấy tham số 
    $id = $_GET["id"];
    // ket noi db
    require_once("./functions/db.php");
    $conn = ketnoidb();
    // truy vấn tìm chính xác sinh viên với id
    $sql = "select * from sinhvien where id=$id";
    $result = $conn->query($sql);
    if($result->num_rows == 0){
        die("404 Not found");
    }
    $sv = $result->fetch_assoc();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('html/nav.php'); ?>
     <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h1>Sửa thông tin sinh viên</h1>
                <form action="/capnhatsinhvien.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $sv["id"]; ?>"/>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $sv["name"] ?>" name="name" type="text" class="form-control" id="floatingInput" placeholder="Họ và tên">
                        <label for="floatingInput">Họ và tên</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $sv["age"] ?>" name="age" type="number" class="form-control" id="floatingPassword" placeholder="Tuổi">
                        <label for="floatingPassword">Tuổi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $sv["tel"] ?>" name="tel" type="text" class="form-control" placeholder="Điện thoại">
                        <label>Điện thoại</label>
                    </div>
                    <div class="form-floating mb-3">
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
     </div>   
</body>
</html>