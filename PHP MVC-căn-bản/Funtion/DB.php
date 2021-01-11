<!-- WHAT WHY WHERE WHEN WHO HOW -->

<!-- MySQL không thể sử dụng đối mới PHP7 trở lên -->

<!-- MySQLI ( MySQL improved) -->
<?php 
// BƯỚC 1: TẠO DATABASE
// Tạo kết nối
$conn = mysqli_connect('localhost', 'root', '');
  
// Nếu kết nối thất bại
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error() + "<br><br>");
}
  
// Lệnh tạo database
$sql = "CREATE DATABASE php_example";
  
// Thực thi câu truy vấn
if (mysqli_query($conn, $sql)) 
{
    echo 'Tạo database thành công!<br><br>';
     
    // BƯƠC 2: TẠO TABLE
    // Chọn database
    mysqli_select_db($conn, 'php_example');
     
    // Câu lệnh SQL
    $sql = "CREATE TABLE IF NOT EXISTS `tb_user` (
        `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
        `username` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
        `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
        `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
        `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
        `level` tinyint(1) DEFAULT NULL,
        `add_date` datetime DEFAULT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;";
     
    // Thực thi câu truy vấn
    if (mysqli_query($conn, $sql)) {
        echo "Tạo table thành công<br><br>";
    } else {
    }
     
} else {
}
  
// Tạo xong thì ngắt kết nối
mysqli_close($conn);
?>