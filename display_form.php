<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .form-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .form-group {
            flex-basis: 48%;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Submitted Payment Receipt Information</h2>

    <p><strong>First Name:</strong> <?php echo htmlspecialchars($_SESSION['first_name']); ?></p>
    <p><strong>Last Name:</strong> <?php echo htmlspecialchars($_SESSION['last_name']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    <p><strong>Invoice ID:</strong> <?php echo htmlspecialchars($_SESSION['invoice_id']); ?></p>
    <p><strong>Pay For:</strong> <?php echo htmlspecialchars($_SESSION['pay_for']); ?></p>
    <p><strong>Additional Information:</strong> <?php echo htmlspecialchars($_SESSION['additional_info']); ?></p>

    <p><strong>Uploaded Receipt:</strong> 
    <?php if (isset($_SESSION['receipt'])): ?>
        <a href="<?php echo $_SESSION['receipt']; ?>" target="_blank">View Receipt</a>
    <?php else: ?>
        No receipt uploaded.
    <?php endif; ?>
    </p>
</div>

</body>
</html>
