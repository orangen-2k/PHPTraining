<?php
// Kết lối SQL
$servername = "localhost";
$database = "PHPTraining";
$username = "root";
$password = "admin";
$conn = mysqli_connect($servername, $username, $password, $database);
// $conn = mysqli_connect($servername, $username, $password);

// Tạo table
$sql = "CREATE TABLE TestCRUD (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    familyName VARCHAR(30) NOT NULL,
    displayName TEXT,
    emailAddress TEXT,
    birthYear TEXT,
    phoneNumber TEXT,
)";

// Thực thi câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Successfully created table";
} else {
    echo "Failed to create table: " . $conn->error;
}
 
// // Ngắt kết nối
$conn->close();
?>