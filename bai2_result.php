<?php
// Server-side validation
$error = "";
$firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
$lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$invoiceId = isset($_POST['invoiceId']) ? trim($_POST['invoiceId']) : '';
$payFor = isset($_POST['payFor']) ? $_POST['payFor'] : [];

if (!$firstName || !$lastName || !$email || !$invoiceId) {
    $error = "All fields are required.";
} elseif (!is_numeric($invoiceId)) {
    $error = "Invoice ID must be a number.";
} elseif (empty($payFor)) {
    $error = "You must select at least one Pay For option.";
}

if ($error) {
    // Redirect back to form if there's an error
    include('bai2_form.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt Result</title>
    <link rel="stylesheet" href="bai2_style.css">
</head>
<body>

    <div class="result-container">
        <h2>Payment Receipt Submitted</h2>
        <p><strong>Name:</strong> <?= htmlspecialchars($firstName) . ' ' . htmlspecialchars($lastName) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
        <p><strong>Invoice ID:</strong> <?= htmlspecialchars($invoiceId) ?></p>
        <p><strong>Pay For:</strong></p>
        <ul>
            <?php foreach ($payFor as $item): ?>
                <li><?= htmlspecialchars($item) ?></li>
            <?php endforeach; ?>
        </ul>
        <button onclick="window.location.href='bai2_form.php'">Quay lại</button>
    </div>

</body>
</html>
