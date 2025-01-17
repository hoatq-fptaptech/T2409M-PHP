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
                <h1>Thêm sinh viên</h1>
                <form action="/luusinhvien.php" method="post" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input name="avatar" type="file" class="form-control" placeholder="Avatar">
                        <label for="floatingInputavatar">Avatar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Họ và tên">
                        <label for="floatingInput">Họ và tên</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="age" type="number" class="form-control" id="floatingPassword" placeholder="Tuổi">
                        <label for="floatingPassword">Tuổi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="tel" type="text" class="form-control" placeholder="Điện thoại">
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