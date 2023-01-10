<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/configs/constants.php';

$sortedObj = new TransactionSortingClass();
$sortedByComments = $sortedObj->sortedByComments();
$sortedByDate     = $sortedObj->sortedByDate();

// print_r($sortedByDate);
// print_r($sortedByComments);
