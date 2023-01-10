<?php

class WithdrawClass implements TransactionInterface {
	public function pay(TransactionClass $transaction, BalanceClass $balance): void
	{
		$dataTransactionArr = $transaction->getTransactionData();
		$dataBalanceArr     = $balance->getBalanceData();

		$dataBalanceArr["sender_id"]        = null;
		$dataBalanceArr["transaction_type"] = WITHDRAWAL;

		$transaction->addTransaction($dataTransactionArr);

        $balance->updateBalance($dataBalanceArr);

		echo "Withdrawal transaction success " . PHP_EOL;
		return;
	}
}