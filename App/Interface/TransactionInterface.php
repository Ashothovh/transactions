<?php

interface TransactionInterface {
	public function pay(TransactionClass $transaction, BalanceClass $balance): void;
}