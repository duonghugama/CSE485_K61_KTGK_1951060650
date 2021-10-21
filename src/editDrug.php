<?php
    include 'header.php';
?>

<body>
  <div class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href=""><h1>Thêm thuốc</h1></a>
  </div>
    <main class="container">
        <h2>Thêm thông tin</h2>
        <form action="process-editDrugs.php" method="post">
            <div class="form-group row">
                <label for="empName" class="col-sm-2 col-form-label">Tên Thuốc:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" >
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Loại thuốc</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="type" name="type">
                </div>
            </div>
            <div class="form-group row">
                <label for="empEmail" class="col-sm-2 col-form-label">Mã vạch</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="barcode" name="barcode">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Liều lượng</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="dose" name="dose">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Mã</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="code" name="code">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Giá nhập</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="cost_price" name="cost_price">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Giá Bán</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="selling_pricve" name="selling_pricve">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Trạng thái hết hạn</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="expiry" name="expiry">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Công ty</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="company_name" name="company_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Ngày sản xuất</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="production_date" name="production_date"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Ngày hết hạn</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="expiration_date" name="expiration_date">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Nơi sản xuất</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="place" name="place">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Số lượng</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="quantity" name="quantity">
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