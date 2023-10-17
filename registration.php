<?php
require_once('DB_config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Account_ID = $_POST['Account_ID'];
    $Account_Name = $_POST['Account_Name'];
    $Balance = floatval($_POST['Balance']);
    $Account_Type = $_POST['Account_Type'];

    if ($Balance < 0) {
        echo "Balance cannot be negative.";
    } else {
        $sql = "INSERT INTO bank_account (Account_ID, Account_Name, Balance, Account_Type) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssds", $Account_ID, $Account_Name, $Balance, $Account_Type);

        if ($stmt->execute()) {
            echo "Account registered successfully!";
        } else {
            echo "Error registering the account: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bank Account Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bank Account Registration</h1>
    <form class="form" method="post" action="registration.php">

    <label for="Account_ID">Account ID:</label>
        <input type="text" name="Account_ID" required><br></br>

        <label for="Account_Name">Account Name:</label>
        <input type="text" name="Account_Name" required><br></br>

        <label for="Balance">Balance:</label>
        <input type="number" name="Balance" step="0.01" required><br></br>

        <label for="Account_Type">Account Type:</label>
        <input type="text" name="Account_Type" required><br></br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>