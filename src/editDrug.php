<?php
    include 'header.php';
    $id = $_GET['id'];
    include 'config.php';
    
?>
<?php
$id = $_GET['id'];
$sql = "select * from drugs where id = $id";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($res);
        $name = $row['name'];
        $type = $row['type'];
        $barcode = $row['barcode'];
        $dose = $row['dose'];
        $code = $row['code'];
        $price = $row['cost_price'];
        $selling = $row['selling_pricve'];
        $expiry = $row['expiry'];
        $company_name = $row['company_name'];
        $production_date = $row['production_date'];
        $expiration_date = $row['expiration_date'];
        $place = $row['place'];
        $quantity = $row['quantity'];
    } else {
        header("index.php");
    }
}
?>
<body>
  <div class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href=""><h1>Sửa thuốc</h1></a>
  </div>
    <main class="container">
        <h2>Sửa thông tin</h2>
        <form action="process-editDrugs.php" method="post">
            <div class="form-group row">
                <label for="empName" class="col-sm-2 col-form-label">Tên Thuốc:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Loại thuốc</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="type" name="type" value="<?php echo $type; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empEmail" class="col-sm-2 col-form-label">Mã vạch</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="barcode" name="barcode" value="<?php echo $barcode; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Liều lượng</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="dose" name="dose" value="<?php echo $dose; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Mã</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="code" name="code" value="<?php echo $code; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Giá nhập</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="cost_price" name="cost_price" value="<?php echo $cost_price; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Giá Bán</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="selling_pricve" name="selling_pricve" value="<?php echo $selling_pricve; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Trạng thái hết hạn</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="expiry" name="expiry" value="<?php echo $expiry; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Công ty</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $company_name; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Ngày sản xuất</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="production_date" name="production_date" value="<?php echo $production_date; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Ngày hết hạn</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="expiration_date" name="expiration_date value="<?php echo $expiration_date; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Nơi sản xuất</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="place" name="place value="<?php echo $place; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Số lượng</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo $quantity; ?>>
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
        </form>
</body>

</html>