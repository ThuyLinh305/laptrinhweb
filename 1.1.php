<?php
$servername = "localhost"; // Hoặc sử dụng "127.0.0.1" tùy thuộc vào cấu hình máy chủ của bạn
$username = "root";  // Sử dụng tài khoản root
$password = "";  // Tài khoản root này không có mật khẩu theo như thông tin từ hình

// Tạo kết nối
$conn = new mysqli($servername, $username, $password);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Tạo cơ sở dữ liệu mới
$sql = "CREATE DATABASE b5_mydb";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// Chọn cơ sở dữ liệu b5_mydb
$conn->select_db("b5_mydb");

// Tạo bảng mới
$sql = "CREATE TABLE myGuests (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(50) NOT NULL,
  lastname VARCHAR(50) NOT NULL,
  email VARCHAR(100),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table myGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
