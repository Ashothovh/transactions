<?php


class MakeTransactionRepository extends DatabaseClass{
    
    private $db_name = __DIR__."/../../Database/transactions.json";
    
    public function addTransaction($newTransactionData){
        $transactions = $this->getDatabaseData($this->db_name);
        
        $amount           = $newTransactionData[0];
        $comment          = $newTransactionData[1];
        $due_date         = $newTransactionData[2];
        $date             = $newTransactionData[3];
        $transaction_type = $newTransactionData[4];
        $receiver_id      = $newTransactionData[5];

        if(isset($newTransactionData[6]) && $newTransactionData[6] !== null){
            $sender_id = $newTransactionData[6];
        }else{
            $sender_id = null;
        }

        $transactions[] = [
            'sender_id'        => $sender_id, 
            'receiver_id'      => $receiver_id,
            'comment'          => $comment,
            'amount'           => $amount,
            'due_date'         => $due_date,
            'date'             => $date,
            'transaction_type' => $transaction_type
        ];

        $this->addToDatabaseData($this->db_name, $transactions);

        return;
    }
}