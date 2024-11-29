function checkLogin() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'login.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                if (data.role === 'admin') {
                    window.location.href = 'dashBoardAmin.html'; // Chuyển hướng đến trang admin
                } else if (data.role === 'customer') {
                    window.location.href = 'main.html'; // Chuyển hướng đến trang main
                } else {
                    alert('Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.');
                }
            } else {
                console.error('Lỗi trong quá trình xử lý yêu cầu.');
            }
        }
    };

    var requestBody = JSON.stringify({ username: username, password: password });
    xhr.send(requestBody);
}