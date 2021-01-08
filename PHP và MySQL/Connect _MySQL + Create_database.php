<?php
// Kết lối SQL
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
// $conn = mysqli_connect($servername, $username, $password);

// Tạo database
$sql = "CREATE DATABASE phptraining";
// Thực thi câu truy vấn
if (mysqli_query($conn, $sql)) {
    echo "Successfully added database";
} else {
    echo "Failed to add database: " . mysqli_error($conn);
}

// Ngắt kết nối
$conn->close();
?>