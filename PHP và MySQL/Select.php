<?php 
// Kết lối SQL
$servername = "localhost";
$database = "PHPTraining";
$username = "root";
$password = "admin";
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Câu SQL lấy danh sách
$sql = "SELECT id, familyName, displayName, emailAddress, birthYear, phoneNumber FROM TestCRUD";
 
// Thực thi câu truy vấn và gán vào $result
$result = $conn->query($sql);
 
// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
if ($result->num_rows > 0) 
{
    // Sử dụng vòng lặp while để lặp kết quả
    while($row = $result->fetch_assoc()) {
        echo "Họ và tên: " . $row["familyName"]. $row["displayName"]."<br>";
    }
} 
else {
    echo "Không có record nào";
}
 
// ngắt kết nối
$conn->close();
?>