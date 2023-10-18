<?php
require 'DB_config.php';
class Bank_Account {
    private $account_holder;
    private $balance;

    public function __construct($account_holder, $balance = 0.0) {
        $this->account_holder = $account_holder;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return "Deposited $$amount. New balance: $$this->balance";
        } else {
            return "Invalid deposit amount. Please deposit a positive amount.";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return "Withdrew $$amount. New balance: $$this->balance";
        } elseif ($amount > $this->balance) {
            return "Insufficient funds.";
        } else {
            return "Invalid withdrawal amount. Please withdraw a positive amount.";
        }
    }

    public function get_balance() {
        return "Account balance for $this->account_holder: $$this->balance";
    }
}

// Example usage:
$account1 = new Bank_Account("CRISTEL", 1000.0);

echo $account1->get_balance() . "\n";
echo $account1->deposit(500.0) . "\n";
echo $account1->withdraw(200.0) . "\n";
echo $account1->withdraw(1500.0) . "\n";

?>