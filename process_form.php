<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['invoice_id'] = $_POST['invoice_id'];
    $_SESSION['pay_for'] = isset($_POST['pay_for']) ? implode(", ", $_POST['pay_for']) : 'None';
    $_SESSION['additional_info'] = $_POST['additional_info'];
    
   
    if (isset($_FILES['receipt']) && $_FILES['receipt']['error'] == 0) {
        $upload_dir = 'uploads/';
        $file_name = basename($_FILES['receipt']['name']);
        $target_file = $upload_dir . $file_name;

        
        if (move_uploaded_file($_FILES['receipt']['tmp_name'], $target_file)) {
            $_SESSION['receipt'] = $target_file;
        } else {
            $_SESSION['receipt'] = 'Error uploading file';
        }
    }
   
    header("Location: display_form.php");
    exit();
}
?>
