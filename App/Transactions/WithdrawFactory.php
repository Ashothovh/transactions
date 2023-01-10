<?php

class WithdrawFactory implements TransactionFactoryInterface {

	public static function createTransaction() : TransactionInterface
	{
		return new WithdrawClass();
	}
}