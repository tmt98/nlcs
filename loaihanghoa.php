<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loại Hàng Hóa</title>
    <style>
        * {
            text-align: center;
        }
        table {
            width: 100%;
        }
        td h3 {
            text-align: left;
        }
        td {
            text-align: right;
        }
        #hasp{
            height: 150px;
            width: 150px;
        }
        div#ctsp{
            width: 350px;
            height:300px;
            background: white;
            float: left;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
        }
        div#ctsp:hover{
            box-shadow: 1px 1px 5px #808080;
            background: white;
        }
    </style>
</head>
<body>
    <div id="SP">
    <?php
            $maloai = $_GET['loai'];
            include 'connect.php';
            $sql = "select * from loai,hanghoa where loai.maloai=hanghoa.maloai and loai.tenloai='".$maloai."'";
            $result = $con->query($sql);
            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    echo "
                    <div id='ctsp'>
                    <h3><img id='hasp' src='".$row['hinhanh']."'></h3>
                    <table>
                <tr>
                    <td><h3>Mã mặt hàng:</h3></td>
                    <td>".$row['mahang']."</td>
                </tr>
                <tr>
                    <td><h3>Tên mặt hàng:</h3></td>
                    <td>".$row['tenhang']."</td>
                </tr>
                <tr>
                    <td><h3>Giá nhập:</h3></td>
                    <td>".$row['giamua']."</td>
                </tr>
                <tr>
                    <td><h3>Giá bán:</h3></td>
                    <td>".$row['giaban']."</td>
                </tr>
                <tr>
                    <td><h3>Số lượng:</h3></td>
                    <td>".$row['soluong']."</td>
                </tr>
                <tr>
                    <td><h3>Loại hàng:</h3></td>
                    <td>".$row['tenloai']."</td>
                </tr>
                <tr>
                    <td></  br></td>
                </tr>
            </table>
        </div>";
                    }
                }
            ?> 
        </div>
    </div>
</body>
</html>