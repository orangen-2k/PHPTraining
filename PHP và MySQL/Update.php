<?php
// Kết lối SQL
$servername = "localhost";
$database = "test";
$username = "root";
$password = "admin";
$conn = mysqli_connect($servername, $username, $password, $database);
// $conn = mysqli_connect($servername, $username, $password);


// Lệnh update
$sql = "UPDATE TestCRUD SET displayName='Bình' WHERE id=1";
 
// Thực hiện update
if ($conn->query($sql) === TRUE) {
    echo "Successfully updated";
} else {
    echo "Update failedi: " . $conn->error;
}
 
// ngắt kết nối
$conn->close();
?>