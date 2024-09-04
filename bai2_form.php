<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt Upload Form</title>
    <link rel="stylesheet" href="bai2_style.css">
    <script>
        function validateForm(event) {
            let firstName = document.getElementById('firstName').value.trim();
            let lastName = document.getElementById('lastName').value.trim();
            let email = document.getElementById('email').value.trim();
            let invoiceId = document.getElementById('invoiceId').value.trim();
            let checkboxes = document.querySelectorAll('input[type="checkbox"]');
            let error = "";

            if (firstName === "" || lastName === "" || email === "" || invoiceId === "") {
                error += "All fields are required.<br>";
            }

            if (isNaN(invoiceId)) {
                error += "Invoice ID must be a number.<br>";
            }

            let checked = Array.from(checkboxes).some(checkbox => checkbox.checked);
            if (!checked) {
                error += "You must select at least one Pay For option.<br>";
            }

            if (error !== "") {
                event.preventDefault();
                document.getElementById('error').innerHTML = error;
            }
        }
    </script>
</head>
<body>

    <div class="form-container">
        <h1>Payment Receipt Upload Form</h1>
        <div id="error" class="error"></div>
        <form action="bai2_result.php" method="post" onsubmit="validateForm(event)">
            <label for="firstName">Name</label>
            <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
            <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@example.com" required>

            <label for="invoiceId">Invoice ID</label>
            <input type="number" id="invoiceId" name="invoiceId" required>

            <label>Pay For</label>
            <div class="checkbox-group">
                <label><input type="checkbox" name="payFor[]" value="15K Category"> 15K Category</label>
                <label><input type="checkbox" name="payFor[]" value="35K Category"> 35K Category</label>
                <label><input type="checkbox" name="payFor[]" value="55K Category"> 55K Category</label>
                <label><input type="checkbox" name="payFor[]" value="75K Category"> 75K Category</label>
                <label><input type="checkbox" name="payFor[]" value="116K Category"> 116K Category</label>
                <label><input type="checkbox" name="payFor[]" value="Shuttle One Way"> Shuttle One Way</label>
                <label><input type="checkbox" name="payFor[]" value="Shuttle Two Ways"> Shuttle Two Ways</label>
                <label><input type="checkbox" name="payFor[]" value="Compressport T-Shirt Merchandise"> Compressport T-Shirt Merchandise</label>
                <label><input type="checkbox" name="payFor[]" value="Training Cap Merchandise"> Training Cap Merchandise</label>
                <label><input type="checkbox" name="payFor[]" value="Buf Merchandise"> Buf Merchandise</label>
                <label><input type="checkbox" name="payFor[]" value="Other"> Other</label>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
