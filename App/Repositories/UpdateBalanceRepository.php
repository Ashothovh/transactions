<?php

class UpdateBalanceRepository extends DatabaseClass{

    private $db_name = __DIR__ . "/../../Database/accounts.json";

    public function updateBalance($dataBalanceArr){
        $receiver_id = $dataBalanceArr["receiver_id"];
        $accountObj  = new AccountsClass();
        $receiver    = $accountObj->getAccountData($receiver_id);
        $amount      = $dataBalanceArr["amount"];

        switch($dataBalanceArr["transaction_type"]){
            case DEPOSIT:
                $receiver["balance"] = $receiver["balance"] + abs($amount);
                $this->toUpdateData($receiver_id, $receiver["balance"]);
                break;
            case WITHDRAWAL:
                if($receiver["balance"] < abs($amount)){
                    throw new \Exception("Insufficient balance");
                }
                $receiver["balance"] = $receiver["balance"] - abs($amount);
                $this->toUpdateData($receiver_id, $receiver["balance"]);
                break;
            case TRANSFER: 
                $sender_id = $dataBalanceArr["sender_id"];
                $sender    = $accountObj->getAccountData($sender_id);
                if($sender["balance"] < abs($amount)){
                    throw new \Exception("Insufficient balance");
                }
                $receiver["balance"] = $receiver["balance"] + abs($amount);
                $sender["balance"]   = $sender["balance"] - abs($amount);
                $this->toUpdateData($receiver_id, $receiver["balance"], $sender_id, $sender["balance"]);
                break;
            default:
                throw new \Exception("Undefined Transaction Type " . $dataBalanceArr["transaction_type"]);     
        }
    }  
    
    public function toUpdateData(...$dataToSave){
        $accounts_arr                          = $this->getDatabaseData($this->db_name);
        $receiver_id                           = $dataToSave[0];
        $receiver_new_balance                  = $dataToSave[1];
        $accounts_arr[$receiver_id]["balance"] = $receiver_new_balance;

        if(isset($dataToSave[2]) && $dataToSave[2] !== null){
            $sender_id                           = $dataToSave[2];
            $sender_new_balance                  = $dataToSave[3];
            $accounts_arr[$sender_id]["balance"] = $sender_new_balance;
        }

        $this->addToDatabaseData($this->db_name, $accounts_arr);
        
        return;
    }
}