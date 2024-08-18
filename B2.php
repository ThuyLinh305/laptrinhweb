<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sách</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: left;
        }
        th, td {
            width: 33%;
        }
    </style>
</head>
<body>

<?php
    $totalBooks = 100;
    $booksPerPage = 10;
    $totalPages = ceil($totalBooks / $booksPerPage);
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $startIndex = ($currentPage - 1) * $booksPerPage;
    $endIndex = min($startIndex + $booksPerPage - 1, $totalBooks - 1);
?>

<h2>Danh sách sách</h2>

<table>
    <tr>
        <th>STT</th>
        <th>Tên Sách</th>
        <th>Nội Dung Sách</th>
    </tr>
    
    <?php
        for ($i = $startIndex + 1; $i <= $endIndex + 1; $i++) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>Tên sách " . $i . "</td>";
            echo "<td>Nội dung sách " . $i . "</td>";
            echo "</tr>";
        }
    ?>
</table>

<div style="margin-top: 20px;">
    <?php
        if ($currentPage > 1) {
            echo '<a href="?page=' . ($currentPage - 1) . '">Trang trước</a> ';
        }

        for ($page = 1; $page <= $totalPages; $page++) {
            if ($page == $currentPage) {
                echo '<strong>' . $page . '</strong> ';
            } else {
                echo '<a href="?page=' . $page . '">' . $page . '</a> ';
            }
        }

        if ($currentPage < $totalPages) {
            echo '<a href="?page=' . ($currentPage + 1) . '">Trang sau</a>';
        }
    ?>
</div>

</body>
</html>
