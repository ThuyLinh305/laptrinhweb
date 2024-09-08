<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt Upload Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-checkboxes {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        .form-checkboxes div {
            flex-basis: 40%;
        }
        input[type="checkbox"] {
            margin-right: 10px;
        }
        .upload-section {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 18px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>

<div class="form-container">
    <h2>Payment Receipt Upload Form</h2>
    <form action="process_form.php" method="post">
        <div class="form-row">
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last_name" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="invoice-id">Invoice ID</label>
                <input type="text" id="invoice-id" name="invoice_id" required>
            </div>
        </div>

        <label>Pay For</label>
        <div class="form-checkboxes">
            <div>
                <input type="checkbox" id="15k-category" name="pay_for[]" value="15K Category">
                <label for="15k-category">15K Category</label>
            </div>
            <div>
                <input type="checkbox" id="35k-category" name="pay_for[]" value="35K Category">
                <label for="35k-category">35K Category</label>
            </div>
            <div>
                <input type="checkbox" id="55k-category" name="pay_for[]" value="55K Category">
                <label for="55k-category">55K Category</label>
            </div>
            <div>
                <input type="checkbox" id="75k-category" name="pay_for[]" value="75K Category">
                <label for="75k-category">75K Category</label>
            </div>
            <div>
                <input type="checkbox" id="116k-category" name="pay_for[]" value="116K Category">
                <label for="116k-category">116K Category</label>
            </div>
            <div>
                <input type="checkbox" id="shuttle-one-way" name="pay_for[]" value="Shuttle One Way">
                <label for="shuttle-one-way">Shuttle One Way</label>
            </div>
            <div>
                <input type="checkbox" id="shuttle-two-ways" name="pay_for[]" value="Shuttle Two Ways">
                <label for="shuttle-two-ways">Shuttle Two Ways</label>
            </div>
            <div>
                <input type="checkbox" id="compressport-tshirt" name="pay_for[]" value="Compressport T-Shirt Merchandise">
                <label for="compressport-tshirt">Compressport T-Shirt Merchandise</label>
            </div>
            <div>
                <input type="checkbox" id="training-cap" name="pay_for[]" value="Training Cap Merchandise">
                <label for="training-cap">Training Cap Merchandise</label>
            </div>
            <div>
                <input type="checkbox" id="buf-merchandise" name="pay_for[]" value="Buf Merchandise">
                <label for="buf-merchandise">Buf Merchandise</label>
            </div>
            <div>
                <input type="checkbox" id="other" name="pay_for[]" value="Other">
                <label for="other">Other</label>
            </div>
        </div>

        
        <div class="form-group upload-section">
            <label for="receipt">Please upload your payment receipt</label><br>
            <input type="file" id="receipt" name="receipt" accept="image/*" required>
        </div>

        <div class="form-group">
            <label for="additional_info">Additional Information</label>
            <textarea id="additional_info" name="additional_info"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
