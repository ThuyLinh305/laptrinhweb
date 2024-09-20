<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "b5_mydb";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Câu lệnh SQL để chèn dữ liệu
$sql = "INSERT INTO myGuests (firstname, lastname, email, reg_date)
VALUES ('John', 'Doe', 'john@example.com', '2023-09-03 16:30:15'),
       ('Jane', 'Smith', 'jane@example.com', '2023-09-03 16:30:15'),
       ('James', 'Johnson', 'james@example.com', '2023-09-03 16:30:15'),
       ('Emily', 'Brown', 'emily@example.com', '2023-09-03 16:30:15'),
       ('Michael', 'Davis', 'michael@example.com', '2023-09-03 16:30:15');";

if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
