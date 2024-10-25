// Hàm kiểm tra thông tin đăng nhập
function checkLogin() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Gửi yêu cầu kiểm tra thông tin đăng nhập đến server
    // Ở đây bạn có thể sử dụng Ajax để gửi yêu cầu đến file xử lý PHP
    // Ví dụ: sử dụng XMLHttpRequest hoặc fetch API

    // Giả sử server trả về kết quả qua biến 'response'
    var response = true; // Giả sử thông tin đăng nhập đúng

    if (response) {
        alert('Đăng nhập thành công!');
        // Redirect hoặc thực hiện các hành động khác sau khi đăng nhập thành công
    } else {
        var createAccount = confirm('Tài khoản không tồn tại. Bạn có muốn tạo tài khoản mới không?');
        if (createAccount) {
            // Redirect hoặc thực hiện hành động tạo tài khoản mới
        } else {
            // Thực hiện các hành động khác khi người dùng từ chối tạo tài khoản mới
        }
    }
}