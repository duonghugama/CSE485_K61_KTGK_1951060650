<?php
    include 'header.php';
?>

<body>
  <div class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href=""><h1>Quản lý thuốc</h1></a>
  </div>
  <main>
    <a href="addDrugs.php" class="btn btn-success">Thêm</a>
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
                    <th scope="col">Sửa thuốc</th>
                    <th scope="col">Xóa thuốc</th>
                    <th scope="col">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'config.php';
                    $sql = "SELECT * from drugs";
                    $result = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($result);
                    if($count > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['id'].'</th>';
                            echo '<td>'.$row['name'].'</td>';
                            echo '<td>'.$row['type'].'</td>';
                            echo '<td>'.$row['barcode'].'</td>';
                            echo '<td>'.$row['dose'].'</td>';
                            echo '<td>'.$row['code'].'</td>';
                            echo '<td>'.$row['cost_price'].'</td>';
                            echo '<td>'.$row['selling_pricve'].'</td>';
                            echo '<td><a href="editDrug.php?id='.$row['id'].'"><i class="fas fa-edit"></i></a></td>';
                            echo '<td><a href="deleteDrug.php?id='.$row['id'].'"><i class="fas fa-trash-alt"></i></a></td>';
                            echo '<td><a href="detail.php?id='.$row['id'].'">Chi tiết</a></td>';
                            echo '</tr>';
                        }
                    }
                ?>
            </tbody>
            </table>
    </main>
</body>

</html>