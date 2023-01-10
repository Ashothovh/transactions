<?php

class AccountsClass extends DatabaseClass{

    private $db_name = __DIR__."/../Database/accounts.json";

    /**
     * Required method 1*
     * Returning the name and balance of all accounts
     */
    public function getAllAccountsData(){
        $accountsData = $this->getDatabaseData($this->db_name);
        return $accountsData;
    }

    /**
     * Required method 2*
     * Returning the name and balance of specific account
     */
    public function getAccountData($id){
        $accountsData = $this->getDatabaseData($this->db_name);
        return $accountsData[$id];
    }
}