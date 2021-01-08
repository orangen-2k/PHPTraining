<?php
// Kết lối SQL
$servername = "localhost";
$database = "phptraining";
$username = "root";
$password = "admin";
$conn = mysqli_connect($servername, $username, $password, $database);

// Tạo table
$sql = "CREATE TABLE login (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    account NVARCHAR(25) NOT NULL,
    password NVARCHAR(15) NOT NULL,
    familyName NVARCHAR(50) NOT NULL,
    displayName NVARCHAR(20) NOT NULL,
    emailAddress NVARCHAR(20) NOT NULL,
    birthYear DATE,
    phoneNumber NVARCHAR(10) NOT NULL
)";

// Thực thi câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Successfully created table login";
} else {
    echo "Failed to create table login: " . $conn->error;
}
 
// // Ngắt kết nối
$conn->close();
?>