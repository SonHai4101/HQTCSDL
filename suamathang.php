<?php
include('config/config.php');
?>
<?php
if (isset($_GET['Ma_h'])) {
    $mahang = $_GET['Ma_h'];
    $sql = "SELECT * FROM mathang WHERE Ma_h='$mahang'";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($res);
        $mahang = $row['Ma_h'];
        $tenhang = $row['Ten_h'];
        $hsd = $row['HSD'];
        $giaban = $row['Giaban'];
    } else {
        header('location: index.php');
    }
} else {
    header('location: index.php');
}
?>
<?php 
        
        if(isset($_POST['submit']))
        {
            $mahang = $_POST['mahang'];
            $tenhang = $_POST['tenhang'];
            $hsd = $_POST['hsd'];
            $giaban = $_POST['gia'];

            

            // Update Database
            $sql2 = "UPDATE mathang SET 
                Ten_h = '$tenhang',
                HSD = '$hsd',
                Giaban = '$giaban' 
                WHERE Ma_h='$mahang'
            ";
            $res2 = mysqli_query($conn, $sql2);

            if($res2==true)
            {
                // Category Updated
                header('location: index.php');
            }
            else
            {
                // update failed
                header('location: suamathang.php');
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
                        <input readonly type="text" class="form-control" name="mahang" value="<?php echo $mahang; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tên hàng</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tenhang" value="<?php echo $tenhang ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Hạn sử dụng</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="hsd" value="<?php echo $hsd ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Giá bán</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="gia" value="<?php echo $giaban ?>">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-secondary">Sửa</button>
            </div>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>