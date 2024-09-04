<?php
// Server-side validation
$error = "";
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$author = isset($_POST['author']) ? trim($_POST['author']) : '';
$publisher = isset($_POST['publisher']) ? trim($_POST['publisher']) : '';
$year = isset($_POST['year']) ? trim($_POST['year']) : '';

if (!$name || !$author || !$publisher || !$year) {
    $error = "All fields are required.";
} elseif (!is_numeric($year) || strlen($year) != 4) {
    $error = "Year must be a 4-digit number.";
}

if ($error) {
    // Redirect back to form if there's an error
    include('new_form.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sách</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .result-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .result-container h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .result-container p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .result-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .result-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="result-container">
        <h2>Thông tin sách</h2>
        <p><strong>Tên:</strong> <?= htmlspecialchars($name) ?></p>
        <p><strong>Tác Giả:</strong> <?= htmlspecialchars($author) ?></p>
        <p><strong>Nhà suất bản:</strong> <?= htmlspecialchars($publisher) ?></p>
        <p><strong>Tên:</strong> <?= htmlspecialchars($year) ?></p>
        <button onclick="window.location.href='new_form.php'">Quay lại</button>
    </div>

</body>
</html>
