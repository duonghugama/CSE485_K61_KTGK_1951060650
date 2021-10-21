<?php
include 'header.php';
$id = $_GET['id'];
    
    include 'config.php';

    // Bước 02:
    $sql = "DELETE FROM `drugs` WHERE id = $id";

    echo $sql;
    $result = mysqli_query($conn,$sql);
    // Bước 03:
    if($result > 0){
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }


    //Bước 04: Đóng kết nối
    mysqli_close($conn);


?>
