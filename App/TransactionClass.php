<?php

class TransactionClass extends MakeTransactionRepository{
	private int $sum;
	private string $comment;
	private string $due_date;
	private string $date;
	private int $type;
	private int $receiver_id;
	private ?int $sender_id;

	public function __construct(int $sum, string $comment, string $due_date, int $type, int $receiver_id, ?int $sender_id){
		$this->sum         = $sum;
		$this->comment     = $comment;
		$this->due_date    = $due_date;
		$this->date        = strtotime(date("Y-m-d  h:i:s"));
		$this->type        = $type;
		$this->receiver_id = $receiver_id;
		$this->sender_id   = $sender_id;
	}

	public function getTransactionData(){
		$transactionDataArray = [
			$this->sum, 
			$this->comment, 
			$this->due_date, 
			$this->date, 
			$this->type, 
			$this->receiver_id, 
			$this->sender_id
		];
		return $transactionDataArray;
	}
}