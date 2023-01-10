<?php

class TransactionsSortedByDateRepository extends DatabaseClass{

    private $db_name = __DIR__."/../../Database/transactions.json";

    /**
     * Sorting Transactions By Dates
     */
    public function sortByDate(){
        $transactions = $this->getDatabaseData($this->db_name);

        // 1-st way to sort using arrow function, started from PHP 7.4
        usort($transactions, fn($x, $y) => $x['date'] <=> $x['date']);

        // 2-nd way to sort, worked with older versions of PHP 
        // usort($transactions, function($x, $y) {
        //     return strcasecmp($x['due_date'] , $y['due_date']);
        // });

        return $transactions;
    }
}