<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Book Information Form</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items:center ;
            height: 100vh;
        }
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .form-container h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-container label {
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-container input[type="text"],
        .form-container input[type="number"] {
            width: calc(100% - 20px);
            padding: 8px 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Nhập Thông Tin Sách</h1>
        <?php if (isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
        <form action="new_result.php" method="post">
            <label for="name">Tên Sách:</label>
            <input type="text" id="name" name="name" required>

            <label for="author">Tác Giả:</label>
            <input type="text" id="author" name="author" required>

            <label for="publisher">Nhà suất bản:</label>
            <input type="text" id="publisher" name="publisher" required>

            <label for="year">Năm sản xuất:</label>
            <input type="number" id="year" name="year" required>

            <input type="submit" value="Gửi">
        </form>
    </div>

</body>
</html>
