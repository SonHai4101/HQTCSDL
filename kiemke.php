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
        <button class="btn btn-secondary mb-3">Thêm</button>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Mặt hàng</a>
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
                <a class="nav-link active" href="kiemke.php">Kiểm kê</a>
            </li>
        </ul>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Mã hàng</th>
                    <th scope="col">Số lượng bán</th>
                    <th scope="col">Số lượng tồn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config/config.php';

                $sql = "SELECT * from kiemke ";
                $result = mysqli_query($conn, $sql);


                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['Ma_h'] . '</th>';
                        echo '<td>' . $row['SLban'] . '</td>';
                        echo '<td>' . $row['SLton'] . '</td>';
                        echo '</tr>';
                    }
                }


                mysqli_close($conn);

                ?>

            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>