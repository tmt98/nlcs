<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý sửa nhân viên</title>
</head>
<body>
    <?php
    // --> Ghi Log
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    $ngay = date('Y-m-d H:i:s');
    $manv1=$_SESSION['manv'];
    $noidung="Sửa Nhân Viên";
    // -->
    $manv=$_GET['manv'];
    $hoten=$_POST['hoten'];
    $gioitinh=$_POST['gioitinh'];
    $ngaysinh=$_POST['ngaysinh'];
    $quequan=$_POST['quequan'];
    $sodienthoai=$_POST['sodienthoai'];
    $ngaybatdau=$_POST['ngaybatdau'];
    $hinhanh="./img/nhanvien/" . $_FILES['hinhanh']['name'];
	move_uploaded_file($_FILES['hinhanh']['tmp_name'],$hinhanh);
    include './../connect.php';
    if ($hinhanh ==  "./img/nhanvien/"){
    $sql = "UPDATE nhanvien SET hoten='$hoten',gioitinh='$gioitinh',ngaysinh='$ngaysinh',quequan='$quequan',sodienthoai='$sodienthoai',ngaythamgia='$ngaythamgia' WHERE manv='$manv'";
    } else {
        $sql = "UPDATE nhanvien SET hoten='$hoten',gioitinh='$gioitinh',ngaysinh='$ngaysinh',quequan='$quequan',sodienthoai='$sodienthoai',ngaythamgia='$ngaybatdau',hinhanh='$hinhanh' WHERE manv='$manv'";
    }
    $result = $con->query($sql);
    move_uploaded_file($_FILES['hinhanh']['tmp_name'],"./../".$hinhanh);
    if ($result == 1){
        $sqlLog = 'INSERT INTO nhatki (ngaynhatki,manv,noidung,lenhsql) VALUES ("'.$ngay.'","'.$manv1.'","'.$noidung.'","'.$sql.'")';
        echo $sqlLog;
        $resultLog =$con->query($sqlLog);
        header("Location: /quanlynhanvien.php");
        echo "Sửa sản phẩm thành công!";
    } else {
        echo "Sửa sản phẩm thất bại";

    }
    $con->close();
?>
</body>
</html>