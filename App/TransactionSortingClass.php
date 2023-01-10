<?php

class TransactionSortingClass {

    public function sortedByComments(){
        $sortingObj       = new TransactionsSortedByCommentsRepository();
        $sortedByComments = $sortingObj->sortByAlphabeticalOrder();
        
        return $sortedByComments;
    }
    
    public function sortedByDate(){
        $sortingObj       = new TransactionsSortedByDateRepository();
        $sortedByDate     = $sortingObj->sortByDate();
        
        return $sortedByDate;
    }
}