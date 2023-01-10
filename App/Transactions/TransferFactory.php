<?php

class TransferFactory implements TransactionFactoryInterface {

	public static function createTransaction() : TransactionInterface
	{
		return new TransferClass();
	}
}