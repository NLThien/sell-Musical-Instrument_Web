<?php
include 'resource/database/smiData.db';
// Lấy dữ liệu gửi từ client
$data = json_decode(file_get_contents("php://input"));

$username = $data->username;
$password = $data->password;

// Kiểm tra thông tin đăng nhập
if ($username === "admin" && $password === "admin_password") {
    echo json_encode(array("role" => "admin"));
} elseif ($username === "customer" && $password === "customer_password") {
    echo json_encode(array("role" => "customer"));
} else {
    echo json_encode(array("role" => "invalid"));
}
?>