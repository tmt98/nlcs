<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý xóa nhân viên</title>
</head>
<body>
    <?php
        include './../connect.php';
        $manv  = $_GET['manv'];
        $sql = "DELETE FROM nhanvien WHERE manv = '$manv';";
        $result = $con->query($sql);
        if ($result == 1){
        header("Location: /quanlynhanvien.php");
            echo "Thêm sản phẩm thành công!";
        } else {
            echo "Thêm sản phẩm thất bại";
        }
        $con->close();
    ?>
</body>
</html>