<?php 

    include('config/config.php');

    $mahang = $_GET['Ma_h'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM mathang WHERE Ma_h='$mahang'";

    //Execute the Query
    $res = mysqli_query($conn, $sql);

    // Check whether the query executed successfully or not
    if($res==true)
    {
        //Query Executed Successully and Admin Deleted
        //echo "Admin Deleted";
        //Create SEssion Variable to Display Message
        //Redirect to Manage Admin Page
        header("location: index.php");
    }
    else
    {
        echo $sql;
        echo "lỗi";
    }



?>