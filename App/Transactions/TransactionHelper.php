<?php


class TransactionHelper {

	public static function getTransactionFactory(string $transactionType): TransactionFactoryInterface
	{
		switch($transactionType){
            case DEPOSIT:
                return new DepositFactory();
            case WITHDRAWAL:
                return new WithdrawFactory();
            case TRANSFER: 
                return new TransferFactory();
            default:
                throw new \Exception("Undefined Transaction Type " . $transactionType);   
        }
	}
}