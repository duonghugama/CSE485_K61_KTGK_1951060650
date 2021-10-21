<?php
include 'header.php';
$id = $_GET['id'];
?>

<body>
    <div class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="">
            <h1>Chi tiết thuốc</h1>
        </a>
    </div>
    <main>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã Thuốc</th>
                    <th scope="col">Tên thuốc</th>
                    <th scope="col">Loại thuốc</th>
                    <th scope="col">Mã vạch</th>
                    <th scope="col">Liều lượng</th>
                    <th scope="col">Mã</th>
                    <th scope="col">Giá nhập</th>
                    <th scope="col">Giá Bán</th>
                    <th scope="col">Trạng thái Hạn sử dụng</th>
                    <th scope="col">Công ty</th>
                    <th scope="col">Ngày sản xuất</th>
                    <th scope="col">Ngày hết hạn</th>
                    <th scope="col">Nơi sản xuất</th>
                    <th scope="col">Số lượng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $sql = "SELECT * from drugs where id = $id";
                $result = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['type'] . '</td>';
                        echo '<td>' . $row['barcode'] . '</td>';
                        echo '<td>' . $row['dose'] . '</td>';
                        echo '<td>' . $row['code'] . '</td>';
                        echo '<td>' . $row['cost_price'] . '</td>';
                        echo '<td>' . $row['selling_pricve'] . '</td>';
                        echo '<td>' . $row['expiry'] . '</td>';
                        echo '<td>' . $row['company_name'] . '</td>';
                        echo '<td>' . $row['production_date'] . '</td>';
                        echo '<td>' . $row['expiration_date'] . '</td>';
                        echo '<td>' . $row['place'] . '</td>';
                        echo '<td>' . $row['quantity'] . '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>

    </main>
</body>

</html>