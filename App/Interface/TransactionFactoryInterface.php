<?php

interface TransactionFactoryInterface {
    public static function createTransaction() : TransactionInterface;
}