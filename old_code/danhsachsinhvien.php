<?php 
$ds = [];
// 1. Kết nối DB
require_once("./functions/db.php");
$conn = ketnoidb();
// 2. Truy vấn lấy dữ liệu
$sql = "select * from sinhvien";
$rs = $conn->query($sql);
if($rs->num_rows > 0){
    while($row = $rs->fetch_assoc()){
        $ds[] = $row;
    }
}
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
        <h1>Danh sách sinh viên</h1>
        <a class="btn btn-primary" href="/themsinhvien.php">Thêm mới</a>
        <table class="table">
            <thead>
                <th>Avatar</th>
                <th>Name</th>
                <th>Age</th>
                <th>Tel</th>
                <th></th>
            </thead>
            <tbody>
                <?php foreach($ds as $item): ?>
                    <tr>
                        <td><img src="<?php echo $item['avatar'] ?>" width="100"/></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['age'] ?></td>
                        <td><?php echo $item['tel'] ?></td>
                        <td>
                            <a href="/suasinhvien.php?id=<?php echo $item["id"]; ?>"class="btn btn-info">Sửa</a>
                            <a onclick="return confirm(`Xác nhận xoá sinh viên <?php echo $item['name']; ?>`)"
                             href="/xoasinhvien.php?id=<?php echo $item["id"]; ?>"class="btn btn-danger">Xoá</a>
                        </td>
                    </tr>
               <?php endforeach; ?>     
            </tbody>
        </table>
    </div>
</body>
</html>