<!--
// $servername = "tên_máy_chủ";
// $username = "tên_người_dùng";
// $password = "mật_khẩu";
// $dbname = "tên_cơ_sở_dữ_liệu";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Kết nối CSDL thành công";
// } catch(PDOException $e) {
//     echo "Lỗi kết nối CSDL: " . $e->getMessage();
// }
//
<?php
// Kết nối đến cơ sở dữ liệu SQLite
$db = new SQLite3('../resource/database/smiData.db');

// Truy vấn dữ liệu từ bảng trong cơ sở dữ liệu SQLite
$results = $db->query('SELECT * FROM customer');

// Lấy dữ liệu từ kết quả truy vấn và chuyển đổi thành mảng
$data = [];
while ($row = $results->fetchArray()) {
    $data[] = $row;
}

// Đóng kết nối đến cơ sở dữ liệu
$db->close();

// Trả về dữ liệu dưới dạng JSON
header('Content-Type: application/json');
echo json_encode($data);
?>