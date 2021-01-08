<?php
// Kết lối SQL
$servername = "localhost";
$database = "php_example";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

// Câu SQL Insert
$sql = "INSERT INTO `tb_user` (`id`, `username`, `password`, `email`, `fullname`, `level`, `add_date`) VALUES
(1, 'admin', '123', 'thehalfheart@gmail.com', 'Nguyễn Văn Cường', 1, NULL);
";
 
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