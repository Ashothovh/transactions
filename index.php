<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/configs/constants.php';

/**
 * Transactions type constants list
 * 1. DEPOSIT
 * 2. WITHDRAWAL
 * 3. TRANSFER
 * 
 * Note: in case of DEPOSIT and WITHDRAW the sender_id need to be null
 * Note: We have 2 JSON files in Database folder for saving data: accounts.json and transactions.json
 * Note: We have 3 Accounts in accounts.json file to implement transactions between them
 * Note: Change the variable values to see different transactions process
 */

$amount = 100;
$comment = "Transaction for Deposit";
$dueDate = "2022-11-28";
$transactionType = TRANSFER;
$receiver_id = 3;
$sender_id = 2;

$transactionData = [
    'transaction' => new TransactionClass($amount,$comment,$dueDate,$transactionType,$receiver_id,$sender_id),
    'balance'     => new BalanceClass($amount,$receiver_id,$sender_id),
];

$transaction = $transactionData['transaction'];
$balance = $transactionData['balance'];
$makeTransaction = TransactionHelper::getTransactionFactory($transactionType)->createTransaction();

/** Initialize The Operation **/
$makeTransaction->pay($transaction, $balance);