<?php
include 'connectMySqlDB.php';
// Truy vấn dữ liệu sản phẩm
$sql = "SELECT name, price, image FROM products";
$result = $conn->query($sql);

$products = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

$conn->close();
echo json_encode($products);
?>