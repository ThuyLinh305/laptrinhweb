<!DOCTYPE html>
<html>
<head>
    <title>PHÉP TÍNH TRÊN HAI SỐ</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
    border: 1px solid #ccc;
    padding: 20px;
    background-color: #f5f5f5;
}

h1 {
    text-align: center;
    color: #333;
}

p {
    margin-bottom: 10px;
    font-size: 16px;
}

form {
    margin-top: 20px;
}

input[type=number], input[type=submit], select {
    padding: 5px 10px;
    font-size: 14px;
}

a {
    display: block;
    margin-top: 20px;
    text-align: right;
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    <h1>PHÉP TÍNH TRÊN HAI SỐ</h1>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $so1 = $_POST["so1"];
        $so2 = $_POST["so2"];
        $phepTinh = $_POST["phepTinh"];

        switch ($phepTinh) {
            case 'cong':
                echo "<p>Tổng hai số: " . tinhTong($so1, $so2) . "</p>";
                break;
            case 'tru':
                echo "<p>Hiệu hai số: " . tinhHieu($so1, $so2) . "</p>";
                break;
            case 'nhan':
                echo "<p>Tích hai số: " . tinhTich($so1, $so2) . "</p>";
                break;
            case 'chia':
                echo "<p>Thương hai số: " . tinhThuong($so1, $so2) . "</p>";
                break;
        }

        if (kiemTraSoNguyenTo($so1)) {
            echo "<p>Số $so1 là số nguyên tố.</p>";
        } else {
            echo "<p>Số $so1 không phải là số nguyên tố.</p>";
        }

        if (kiemTraSoChan($so2)) {
            echo "<p>Số $so2 là số chẵn.</p>";
        } else {
            echo "<p>Số $so2 không phải là số chẵn.</p>";
        }

        echo "<a href='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>Quay lại</a>";
    } else {
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     Chọn phép tính:
        <select name="phepTinh">
            <option value="cong">Cộng</option>
            <option value="tru">Trừ</option>
            <option value="nhan">Nhân</option>
            <option value="chia">Chia</option>
        </select><br>
        Số thứ nhất: <input type="number" name="so1"><br>
        Số thứ nhì: <input type="number" name="so2"><br>
        <input type="submit" name="submit" value="Tính">
    </form>

    <?php
    }
    ?>
</body>
</html>