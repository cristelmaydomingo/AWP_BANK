<?php
include("DB_config.php");

$inquiry_message = "";
$deposit_message = "";
$withdraw_message = "";


if (isset($_POST['inquire'])) {
    
} elseif (isset($_POST['deposit'])) {
   
} elseif (isset($_POST['withdraw'])) {
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Banking Operations</title>
</head>
<body>
    <h1>Banking Account</h1>

    <h2>Select an operation:</h2>
    <button onclick="showInquiryForm()">Inquire</button>
    <button onclick="showDepositForm()">Deposit</button>
    <button onclick="showWithdrawForm()">Withdraw</button>

    <div id="inquiryForm" style="display: none;">
        <h3>Inquire Balance</h3>
        <form action="" method="post">
        Account Name: <input type="text" name="Account_Name" required><br><br>
            Account Number: <input type="text" name="Account_Number" required><br><br>
            <input type="submit" name="inquire" value="Check Balance">
        </form>
        <p><?php echo $inquiry_message; ?></p>
    </div>

    <div id="depositForm" style="display: none;">
        <h3>Deposit Funds</h3>
        <form action="" method="post">
        Account Name: <input type="text" name="Account_Name" required><br><br>
            Account Number: <input type="text" name="Account_Number" required><br>
            Amount: <input type="number" name="deposit_amount" required><br><br>
            <input type="submit" name="deposit" value="Deposit">
        </form>
        <p><?php echo $deposit_message; ?></p>
    </div>

    <div id="withdrawForm" style="display: none;">
        <h3>Withdraw Funds</h3>
        <form action="" method="post">
        Account Name: <input type="text" name="Account_Name" required><br><br>
            Account Number: <input type="text" name="Account_Number" required><br>
            Amount: <input type="number" name="withdraw_amount" required><br><br>
            <input type="submit" name="withdraw" value="Withdraw">
        </form>
        <p><?php echo $withdraw_message; ?></p>
    </div>

    <script>
    function showInquiryForm() {
        document.getElementById("inquiryForm").style.display = "block";
        document.getElementById("depositForm").style.display = "none";
        document.getElementById("withdrawForm").style.display = "none";
    }

    function showDepositForm() {
        document.getElementById("inquiryForm").style.display = "none";
        document.getElementById("depositForm").style.display = "block";
        document.getElementById("withdrawForm").style.display = "none";
    }

    function showWithdrawForm() {
        document.getElementById("inquiryForm").style.display = "none";
        document.getElementById("depositForm").style.display = "none";
        document.getElementById("withdrawForm").style.display = "block";
    }
</script>

</body>
</html>
v