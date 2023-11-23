<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <ul>
        <?php
            // Kết nối đến cơ sở dữ liệu
            include('includes/db.php');

            // Truy vấn danh sách sản phẩm
            $query = "SELECT * FROM products";
            $result = mysqli_query($conn, $query);

            // Hiển thị danh sách sản phẩm
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>{$row['name']} - {$row['price']}</li>";
            }

            // Đóng kết nối
            mysqli_close($conn);
        ?>
    </ul>
</body>
</html>