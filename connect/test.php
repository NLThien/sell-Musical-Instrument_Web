// Kết nối với cơ sở dữ liệu SQLite
$db = new SQLite3('customer.sqlite3');

// Câu lệnh INSERT dữ liệu vào bảng customers
$query = "INSERT INTO customers (name, email, phone) VALUES ('John Doe', 'john.doe@example.com', '123456789')";

// Thực thi câu lệnh INSERT
$db->exec($query);

echo "Dữ liệu đã được thêm vào bảng customers.";
?>

// Câu lệnh SELECT dữ liệu từ bảng customers
$query = "SELECT * FROM customers";

// Thực thi câu lệnh SELECT và lấy dữ liệu
$result = $db->query($query);

// Hiển thị dữ liệu lấy được
while ($row = $result->fetchArray()) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Phone: " . $row['phone'] . "<br>";
    echo "<br>";
}
?>