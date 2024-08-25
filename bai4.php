<!DOCTYPE html>
<html>
<head>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
    border: 1px solid #ccc;
    padding: 20px;
    background-color: #dcdcdc;
}

h1 {
    text-align: center;
    color: #333;
}

p {
    margin-bottom: 10px;
    font-size: 16px;
}
    </style>
    <h1>Array Functions</h1>
</head>
<body>
<?php
   function findMinMax($arr) {
    $min = min($arr);
    $max = max($arr);
    return array("min" => $min, "max" => $max);
}

function sumArray($arr) {
    return array_sum($arr);
}

function isInArray($arr, $element) {
    return in_array($element, $arr);
}

function sortArray($arr) {
    sort($arr);
    return $arr;
}

   
    $numbers = array (5, 2, 9, 1, 7, 3);
    echo "<p> Mảng ban đầu: 5, 2, 9, 1, 7, 3  </p>";
    
    $minMax = findMinMax($numbers);
    echo "<p>Giá trị lớn nhất trong mảng: " . $minMax["max"] . "</p>";
    
    $minMax = findMinMax($numbers);
    echo "<p> Giá trị nhỏ nhất trong mảng: " . $minMax["min"] . "</p>";
    

    $sum = sumArray($numbers);
    echo "<p>Tổng các phần tử trong mảng: " . $sum . "</p>";
    
    $sortedNumbers = sortArray($numbers);
    echo "<p>Mảng sau khi sắp xếp: " . implode(", ", $sortedNumbers) . "</p>";

    $element = 7;
    if (isInArray($numbers, $element)) {
        echo "<p>$element có trong mảng.</p>";
    } else {
        echo "<p> $element không có trong mảng.</p>";
    }
    ?>
</body>
</html>