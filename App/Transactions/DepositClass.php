<?php

class DepositClass implements TransactionInterface {
	public function pay(TransactionClass $transaction, BalanceClass $balance): void 
	{
		$dataTransactionArr = $transaction->getTransactionData();
		$dataBalanceArr     = $balance->getBalanceData();

		$dataBalanceArr["sender_id"]        = null;
		$dataBalanceArr["transaction_type"] = DEPOSIT;

		$transaction->addTransaction($dataTransactionArr);

        $balance->updateBalance($dataBalanceArr);

		echo "Deposit transaction success " . PHP_EOL;
		return;

	}
}