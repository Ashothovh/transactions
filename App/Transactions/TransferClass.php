<?php

class TransferClass implements TransactionInterface {
	public function pay(TransactionClass $transaction, BalanceClass $balance): void 
	{
		$dataTransactionArr = $transaction->getTransactionData();
		$dataBalanceArr     = $balance->getBalanceData();

		$dataBalanceArr["transaction_type"] = TRANSFER;

		$transaction->addTransaction($dataTransactionArr);

        $balance->updateBalance($dataBalanceArr);

		echo "Transfer transaction success " . PHP_EOL;
		return;
	}
}