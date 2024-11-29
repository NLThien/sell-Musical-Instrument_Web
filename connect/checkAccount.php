<?php
include 'ketNoi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        // Người dùng tồn tại, kiểm tra mật khẩu
        if (password_verify($password, $user['password'])) {
            echo "Đăng nhập thành công!";
            // Thực hiện các hành động sau khi đăng nhập thành công
        } else {
            echo "Sai mật khẩu!";
        }
    } else {
        echo "Tài khoản không tồn tại!";
    }
}
?>