<?php
    $name = $_POST['name'];
    $type = $_POST['type'];
    $barcode = $_POST['barcode'];
    $dose = $_POST['dose'];
    $code = $_POST['code'];
    $cost_price = $_POST['cost_price'];
    $selling_pricve = $_POST['selling_pricve'];
    $expiry =$_POST['expiry'];
    $company_name =$_POST['company_name'];
    $production_date = $_POST['production_date'];
    $expiration_date =$_POST['expiration_date'];
    $place =$_POST['place'];
    $quantity=$_POST['quantity'];

    include 'config.php';

    // Bước 02:
    $sql = "INSERT INTO `drugs`(`name`, `type`, `barcode`, `dose`,
    `code`, `cost_price`, `selling_pricve`, `expiry`, `company_name`, `production_date`, 
    `expiration_date`, `place`, `quantity`)
    VALUES ('$name','$type','$barcode','$dose','$code',$cost_price,
    '$selling_pricve', '$expiry','$company_name','$production_date','$expiration_date','$place','$quantity')";

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