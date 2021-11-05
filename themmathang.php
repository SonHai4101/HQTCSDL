<?php
include('config/config.php');

if (isset($_POST['submit'])) {

    $mahang = $_POST['mahang'];
    $tenhang = $_POST['tenhang'];
    $hsd = $_POST['hsd'];
    $giaban = $_POST['gia'];
    $sql = "insert into mathang values ('$mahang', '$tenhang', '$hsd', '$giaban')";

    echo $sql;
    $result = mysqli_query($conn, $sql);
    //Bước 3:
    if ($result > 0) {
        header("location: index.php");
    } else {
        header("location: index.php");
    }
}
?>

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
        <br>

        <form action="" method="post">
            <div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Mã hàng</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mahang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tên hàng</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tenhang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Hạn sử dụng</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="hsd">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Giá bán</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="gia">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-secondary">Thêm mặt hàng</button>
            </div>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>