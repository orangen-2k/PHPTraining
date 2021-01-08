<?php
// Kết lối SQL
$servername = "localhost";
$database = "PHPTraining";
$username = "root";
$password = "admin";
$conn = mysqli_connect($servername, $username, $password, $database);


// Câu SQL delete
$sql = "DELETE FROM TestCRUD WHERE id=1";

// Thực hiện câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Xóa thành công";
} else {
    echo "Xóa thất bại: " . $conn->error;
}

// Ngắt kết nối
$conn->close();
?>