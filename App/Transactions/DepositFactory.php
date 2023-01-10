<?php

class DepositFactory implements TransactionFactoryInterface {

	public static function createTransaction() : TransactionInterface
	{
		return new DepositClass();
	}
}