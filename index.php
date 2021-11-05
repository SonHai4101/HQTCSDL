<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid">
        <br>
        <center>
            <h1>Quản lý bán hàng</h1>
        </center>
        <a href="themmathang.php"><button class="btn btn-secondary mb-3">Thêm</button></a>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Mặt hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="nhanvien.php">Nhân viên</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="khachhang.php">Khách hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hoadon.php">Hóa đơn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kiemke.php">Kiểm kê</a>
            </li>
        </ul>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Mã hàng</th>
                    <th scope="col">Tên hàng</th>
                    <th scope="col">Hạn sử dụng</th>
                    <th scope="col">Giá bán</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('config/config.php');

                $sql = "SELECT * FROM mathang";
                $res = mysqli_query($conn, $sql);

                if ($res == TRUE) {
                    $count = mysqli_num_rows($res);


                    if ($count > 0) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                            $mahang = $rows['Ma_h'];
                            $tenhang = $rows['Ten_h'];
                            $hsd = $rows['HSD'];
                            $giaban = $rows['Giaban'];
                ?>
                            <tr>
                                <td><?php echo $mahang; ?>. </td>
                                <td><?php echo $tenhang; ?></td>
                                <td><?php echo $hsd; ?></td>
                                <td><?php echo $giaban; ?></td>
                                <td>
                                    <a href="xoamathang.php?Ma_h=<?php echo $mahang; ?>"><button class="btn btn-danger">Xóa</button></a>
                                </td>
                                <td>
                                    <a href="suamathang.php?Ma_h=<?php echo $mahang; ?>"><button class="btn btn-success">Sửa</button></a>
                                </td>
                            </tr>
                <?php
                        }
                    }
                }
                ?>

            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>