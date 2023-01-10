<?php

class BalanceClass extends UpdateBalanceRepository{
	private int $sum;
	private int $receiver_id;
	private ?int $sender_id;

	public function __construct(int $sum, int $receiver_id, ?int $sender_id){
		$this->sum         = $sum;
		$this->receiver_id = $receiver_id;
		$this->sender_id   = $sender_id;
	}

	public function getBalanceData(){
		$balanceDataArray = [
			"amount"      =>$this->sum, 
			"receiver_id" =>$this->receiver_id, 
			"sender_id"   =>$this->sender_id
		];
		return $balanceDataArray;
	}
}