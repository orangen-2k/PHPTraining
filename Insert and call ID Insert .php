<?php
// Kết lối SQL
$servername = "localhost";
$database = "test";
$username = "root";
$password = "admin";
$conn = mysqli_connect($servername, $username, $password, $database);
// $conn = mysqli_connect($servername, $username, $password);

// Câu SQL Insert
$sql = "INSERT INTO TestCRUD (familyName, displayName, emailAddress, birthYear, phoneNumber) 
VALUES ('Nguyễn Thị Thu ', 'Thủy', 'nguyenthithuthuy@gmail.com', '04/03/1998', '09439584553');";
$sql .= "INSERT INTO News (title, content) 
VALUES ('Trần Trung ', 'Hiếu', 'trantrunghieu@gmail.com', '05/06/1998', '0348357584');";
 
// Thực hiện thêm record
if ($conn->multi_query($sql) === TRUE) {
    echo "Successfully added record with ID is $conn->insert_id";
    // echo "Successfully added record with ID is $conn->insert_id $conn->insert_title $conn->insert_content";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
 
// Ngắt kết nối
$conn->close();
?>